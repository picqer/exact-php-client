<?php

namespace Picqer\Financials\Exact;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7;

/**
 * Class Connection
 *
 * @package Picqer\Financials\Exact
 *
 */
class Connection
{
    
    /**
     * Limit of calls per minute.
     */
    const CALLS_LIMIT_PER_MINUTE = 60;
    
    /**
     * @var string
     */
    private $baseUrl = 'https://start.exactonline.nl';

    /**
     * @var string
     */
    private $apiUrl = '/api/v1';

    /**
     * @var string
     */
    private $authUrl = '/api/oauth2/auth';

    /**
     * @var string
     */
    private $tokenUrl = '/api/oauth2/token';

    /**
     * @var mixed
     */
    private $exactClientId;

    /**
     * @var mixed
     */
    private $exactClientSecret;

    /**
     * @var mixed
     */
    private $authorizationCode;

    /**
     * @var mixed
     */
    private $accessToken;

    /**
     * @var int The Unix timestamp at which the access token expires.
     */
    private $tokenExpires;

    /**
     * @var mixed
     */
    private $refreshToken;
    
    /**
     * @var bool Pauses a request to make sure the calls per minute restriction is respected.
     */
    private $pauseForMinuteLimit = false;
    
    /**
     * @var bool Pauses a request to make sure the calls are not made during maintenance.
     */
    private $pauseForMaintenance = false;
    
    /**
     * @var int
     */
    protected $callsLimit = self::CALLS_LIMIT_PER_MINUTE;
    
    /**
     * @var int
     */
    protected $callsLeft = self::CALLS_LIMIT_PER_MINUTE;
    
    /**
     * @var int
     */
    protected $responseTimestamp = 0;
    
    /**
     * @var array Start time of the maintenance in array format [H, m, i].
     */
    private $startMaintenance = [4, 0, 0];
    
    /**
     * @var array End time of the maintenance in array format [H, m, i].
     */
    private $endMaintenance = [4, 30, 0];

    /**
     * @var mixed
     */
    private $redirectUrl;

    /**
     * @var mixed
     */
    private $division;

    /**
     * @var Client|null
     */
    private $client;

    /**
     * @var callable(Connection)
     */
    private $tokenUpdateCallback;

    /**
     * @var callable(Connection)
     */
    private $acquireAccessTokenLockCallback;

    /**
     * @var callable(Connection)
     */
    private $acquireAccessTokenUnlockCallback;

    /**
     * @var callable[]
     */
    protected $middleWares = [];

    /**
    * @var string|null
    */
    public $nextUrl = null;

    /**
     * @return Client
     */
    private function client()
    {
        if ($this->client) {
            return $this->client;
        }

        $handlerStack = HandlerStack::create();
        foreach ($this->middleWares as $middleWare) {
            $handlerStack->push($middleWare);
        }

        $this->client = new Client([
            'http_errors' => true,
            'handler' => $handlerStack,
            'expect' => false,
        ]);

        return $this->client;
    }

    public function insertMiddleWare($middleWare)
    {
        $this->middleWares[] = $middleWare;
    }

    public function connect()
    {
        // Redirect for authorization if needed (no access token or refresh token given)
        if ($this->needsAuthentication()) {
            $this->redirectForAuthorization();
        }

        // If access token is not set or token has expired, acquire new token
        if (empty($this->accessToken) || $this->tokenHasExpired()) {
            $this->acquireAccessToken();
        }

        $client = $this->client();

        return $client;
    }
    
    /**
     * @return bool
     */
    public function pauseForMinuteLimitEnabled()
    {
        return $this->pauseForMinuteLimit;
    }
    
    /**
     * @return self
     */
    public function enablePauseForMinuteLimit()
    {
        $this->pauseForMinuteLimit = true;
        return $this;
    }
    
    /**
     * @return self
     */
    public function disablePauseForMinuteLimit()
    {
        $this->pauseForMinuteLimit = true;
        return $this;
    }
    
    /**
     * @return bool
     */
    public function pauseForMaintenanceEnabled()
    {
        return $this->pauseForMaintenance;
    }
    
    /**
     * @return self
     */
    public function enablePauseForMaintenance()
    {
        $this->pauseForMaintenance = true;
        return $this;
    }
    
    /**
     * @return self
     */
    public function disablePauseForMaintenance()
    {
        $this->pauseForMaintenance = false;
        return $this;
    }
    
    /**
     * Pauses the process until time limit is over
     */
    protected function pause()
    {
        if ($this->pauseForMinuteLimitEnabled()) {
            if($this->minuteLimitExceeded()) {
                sleep(60);
            }
        }
        
        if ($this->pauseForMaintenanceEnabled()) {
            $startMaintenance = mktime(
                $this->startMaintenance[0],
                $this->startMaintenance[1],
                $this->startMaintenance[2]
            );
            
            $endMaintenance = mktime(
                $this->endMaintenance[0],
                $this->endMaintenance[1],
                $this->endMaintenance[2]
            );
            
            $now = time();
            if ($now >= $startMaintenance && $now <= $endMaintenance) {
                sleep($endMaintenance - $now);
            }
        }
    }
    
    /**
     * @return bool
     */
    protected function minuteLimitExceeded()
    {
        return $this->callsLeft <= 0;
    }
    
    /**
     * @param string $method
     * @param        $endpoint
     * @param null   $body
     * @param array  $params
     * @param array  $headers
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \Picqer\Financials\Exact\ApiException
     */
    private function createRequest($method, $endpoint, $body = null, array $params = [], array $headers = [])
    {
        // Add default json headers to the request
        $headers = array_merge($headers, [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Prefer' => 'return=representation'
        ]);
        
        $this->pause();

        // If access token is not set or token has expired, acquire new token
        if (empty($this->accessToken) || $this->tokenHasExpired()) {
            $this->acquireAccessToken();
        }

        // If we have a token, sign the request
        if (!$this->needsAuthentication() && !empty($this->accessToken)) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        // Create param string
        if (!empty($params)) {
            $endpoint .= '?' . http_build_query($params);
        }

        // Create the request
        $request = new Request($method, $endpoint, $headers, $body);

        return $request;
    }
    
    protected function beforeValidatingAccessToken()
    {
        $this->pause();
    }

    /**
     * @param       $url
     * @param array $params
     * @param array $headers
     *
     * @return mixed|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Picqer\Financials\Exact\ApiException
     */
    public function get($url, array $params = [], array $headers = [])
    {
        $url = $this->formatUrl($url, $url !== 'current/Me', $url == $this->nextUrl);

        try {
            $request = $this->createRequest('GET', $url, null, $params, $headers);
            $response = $this->client()->send($request);

            return $this->parseResponse($response, $url != $this->nextUrl);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
        
        return null;
    }
    
    /**
     * @param $url
     * @param $body
     *
     * @return mixed|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Picqer\Financials\Exact\ApiException
     */
    public function post($url, $body)
    {
        $url = $this->formatUrl($url);

        try {
            $request  = $this->createRequest('POST', $url, $body);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }

        return null;
    }
    
    /**
     * @param $url
     * @param $body
     *
     * @return mixed|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Picqer\Financials\Exact\ApiException
     */
    public function put($url, $body)
    {
        $url = $this->formatUrl($url);

        try {
            $request  = $this->createRequest('PUT', $url, $body);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }

        return null;
    }
    
    /**
     * @param $url
     *
     * @return mixed|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Picqer\Financials\Exact\ApiException
     */
    public function delete($url)
    {
        $url = $this->formatUrl($url);

        try {
            $request  = $this->createRequest('DELETE', $url);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }

        return null;
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->baseUrl . $this->authUrl . '?' . http_build_query(array(
            'client_id' => $this->exactClientId,
            'redirect_uri' => $this->redirectUrl,
            'response_type' => 'code'
        ));
    }

    /**
     * @param mixed $exactClientId
     */
    public function setExactClientId($exactClientId)
    {
        $this->exactClientId = $exactClientId;
    }

    /**
     * @param mixed $exactClientSecret
     */
    public function setExactClientSecret($exactClientSecret)
    {
        $this->exactClientSecret = $exactClientSecret;
    }

    /**
     * @param mixed $authorizationCode
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    /**
     * @param mixed $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @param mixed $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     *
     */
    public function redirectForAuthorization()
    {
        $authUrl = $this->getAuthUrl();
        header('Location: ' . $authUrl);
        exit;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * @return bool
     */
    public function needsAuthentication()
    {
        return empty($this->refreshToken) && empty($this->authorizationCode);
    }

    /**
     * @param Response $response
     * @param bool $returnSingleIfPossible
     * @return mixed
     * @throws ApiException
     */
    protected function parseResponse(Response $response, $returnSingleIfPossible = true)
    {
        try {
            $this->handleRateLimitsFromResponse($response);

            if ($response->getStatusCode() === 204) {
                return [];
            }

            Psr7\rewind_body($response);
            $json = json_decode($response->getBody()->getContents(), true);
            if (array_key_exists('d', $json)) {
                if (array_key_exists('__next', $json['d'])) {
                    $this->nextUrl = $json['d']['__next'];
                }
                else {
                    $this->nextUrl = null;
                }

                if (array_key_exists('results', $json['d'])) {
                    if ($returnSingleIfPossible && count($json['d']['results']) == 1) {
                        return $json['d']['results'][0];
                    }

                    return $json['d']['results'];
                }

                return $json['d'];
            }

            return $json;
        } catch (\RuntimeException $e) {
            throw new ApiException($e->getMessage());
        }
    }
    
    /**
     * @param Response $response
     *
     * @return void
     */
    protected function handleRateLimitsFromResponse(Response $response)
    {
        $this->callsLimit = (int) $response->getHeaderLine('X-RateLimit-Minutely-Limit');
        $this->callsLeft = (int) $response->getHeaderLine('X-RateLimit-Minutely-Remaining');
        $this->responseTimestamp = microtime(true);
        
        $this->pause();
    }

    /**
     * @return mixed
     */
    private function getCurrentDivisionNumber()
    {
        if (empty($this->division)) {
            $me             = new Me($this);
            $this->division = $me->find()->CurrentDivision;
        }

        return $this->division;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
    
    /**
     * @return int
     */
    public function getResponseTimestamp()
    {
        return $this->responseTimestamp;
    }
    
    /**
     * @throws \Picqer\Financials\Exact\ApiException
     */
    protected function acquireAccessToken()
    {
        $this->beforeValidatingAccessToken();
        
        // If refresh token not yet acquired, do token request
        if (empty($this->refreshToken)) {
            $body = [
                'form_params' => [
                    'redirect_uri'  => $this->redirectUrl,
                    'grant_type'    => 'authorization_code',
                    'client_id'     => $this->exactClientId,
                    'client_secret' => $this->exactClientSecret,
                    'code'          => $this->authorizationCode,
                ],
            ];
        } else { // else do refresh token request
            $body = [
                'form_params' => [
                    'refresh_token' => $this->refreshToken,
                    'grant_type'    => 'refresh_token',
                    'client_id'     => $this->exactClientId,
                    'client_secret' => $this->exactClientSecret,
                ],
            ];
        }

        try {
            if (is_callable($this->acquireAccessTokenLockCallback)) {
                call_user_func($this->acquireAccessTokenLockCallback, $this);
            }

            $response = $this->client()->post($this->getTokenUrl(), $body);

            Psr7\rewind_body($response);
            $body = json_decode($response->getBody()->getContents(), true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $this->accessToken  = $body['access_token'];
                $this->refreshToken = $body['refresh_token'];
                $this->tokenExpires = $this->getTimestampFromExpiresIn($body['expires_in']);
                $this->responseTimestamp = strtotime($response->getHeaderLine('Date'));
                
                $this->refreshTokens();

                if (is_callable($this->tokenUpdateCallback)) {
                    call_user_func($this->tokenUpdateCallback, $this);
                }
            } else {
                throw new ApiException('Could not acquire tokens, json decode failed. Got response: ' . $response->getBody()->getContents());
            }
        } catch (BadResponseException $ex) {
            throw new ApiException('Could not acquire or refresh tokens [http ' . $ex->getResponse()->getStatusCode() . ']', 0, $ex);
        } finally {
            if (is_callable($this->acquireAccessTokenUnlockCallback)) {
                call_user_func($this->acquireAccessTokenUnlockCallback, $this);
            }
        }
    }
    
    protected function refreshTokens()
    {
    
    }

    /**
     * Translates expires_in to a Unix timestamp.
     * @param string $expiresIn Number of seconds until the token expires.
     * @return int
     */
    private function getTimestampFromExpiresIn($expiresIn)
    {
        if (!ctype_digit($expiresIn)) {
            throw new \InvalidArgumentException('Function requires a numeric expires value');
        }

        return time() + $expiresIn;
    }

    /**
     * @return int The Unix timestamp at which the access token expires.
     */
    public function getTokenExpires()
    {
        return $this->tokenExpires;
    }

    /**
     * @param int $tokenExpires The Unix timestamp at which the access token expires.
     */
    public function setTokenExpires($tokenExpires)
    {
        $this->tokenExpires = $tokenExpires;
    }

    private function tokenHasExpired()
    {
        if (empty($this->tokenExpires)) {
            return true;
        }

        return $this->tokenExpires <= time() + 10;
    }

    private function formatUrl($endPoint, $includeDivision = true, $formatNextUrl = false)
    {
        if ($formatNextUrl) {
            return $endPoint;
        }

        if ($includeDivision) {
            return implode('/', [
                $this->getApiUrl(),
                $this->getCurrentDivisionNumber(),
                $endPoint
            ]);
        }

        return implode('/', [
            $this->getApiUrl(),
            $endPoint
        ]);
    }


    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->division;
    }


    /**
     * @param mixed $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * @param callable $callback
     */
    public function setAcquireAccessTokenLockCallback($callback) {
        $this->acquireAccessTokenLockCallback = $callback;
    }

    /**
     * @param callable $callback
     */
    public function setAcquireAccessTokenUnlockCallback($callback) {
        $this->acquireAccessTokenUnlockCallback = $callback;
    }

    /**
     * @param callable $callback
     */
    public function setTokenUpdateCallback($callback) {
        $this->tokenUpdateCallback = $callback;
    }

    /**
     * Parse the reponse in the Exception to return the Exact error messages
     * @param Exception $e
     * @throws ApiException
     */
    private function parseExceptionForErrorMessages(Exception $e)
    {
        if (! $e instanceof BadResponseException) {
            throw new ApiException($e->getMessage());
        }

        $response = $e->getResponse();
        Psr7\rewind_body($response);
        $responseBody = $response->getBody()->getContents();
        $decodedResponseBody = json_decode($responseBody, true);

        if (! is_null($decodedResponseBody) && isset($decodedResponseBody['error']['message']['value'])) {
            $errorMessage = $decodedResponseBody['error']['message']['value'];
        } else {
            $errorMessage = $responseBody;
        }

        throw new ApiException('Error ' . $response->getStatusCode() .': ' . $errorMessage);
    }

    /**
     * @return string
     */
    protected function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return string
     */
    private function getApiUrl()
    {
        return $this->baseUrl . $this->apiUrl;
    }

    /**
     * @return string
     */
    private function getTokenUrl()
    {
        return $this->baseUrl . $this->tokenUrl;
    }

    /**
     * Set base URL for different countries according to
     * https://developers.exactonline.com/#Exact%20Online%20sites.html
     *
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $apiUrl
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    /**
     * @param string $authUrl
     */
    public function setAuthUrl($authUrl)
    {
        $this->authUrl = $authUrl;
    }

    /**
     * @param string $tokenUrl
     */
    public function setTokenUrl($tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;
    }
}
