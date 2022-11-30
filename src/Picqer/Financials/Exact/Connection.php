<?php

namespace Picqer\Financials\Exact;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * Class Connection.
 */
class Connection
{
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
     * @var int the Unix timestamp at which the access token expires
     */
    private $tokenExpires;

    /**
     * @var mixed
     */
    private $refreshToken;

    /**
     * @var mixed
     */
    private $redirectUrl;

    /**
     * @var string
     */
    private $state = null;

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
     * @var callable(Connection)
     */
    private $refreshAccessTokenCallback;

    /**
     * @var callable[]
     */
    protected $middleWares = [];

    /**
     * @var string|null
     */
    public $nextUrl = null;

    /**
     * @var int|null
     */
    protected $dailyLimit;

    /**
     * @var int|null
     */
    protected $dailyLimitRemaining;

    /**
     * @var int|null
     */
    protected $dailyLimitReset;

    /**
     * @var int|null
     */
    protected $minutelyLimit;

    /**
     * @var int|null
     */
    protected $minutelyLimitRemaining;

    /**
     * @var int|null
     */
    protected $minutelyLimitReset;

    /**
     * @var bool
     */
    private $waitOnMinutelyRateLimitHit = false;

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
            'handler'     => $handlerStack,
            'expect'      => false,
        ]);

        return $this->client;
    }

    /**
     * Insert a custom Guzzle client.
     *
     * @param Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * Insert a Middleware for the Guzzle-Client.
     *
     * @param callable $middleWare
     */
    public function insertMiddleWare($middleWare)
    {
        $this->middleWares[] = $middleWare;
    }

    /**
     * @throws ApiException
     *
     * @return Client
     */
    public function connect()
    {
        // Redirect for authorization if needed (no access token or refresh token given)
        if ($this->needsAuthentication()) {
            $this->redirectForAuthorization();
        }

        $this->checkOrAcquireAccessToken();

        $client = $this->client();

        return $client;
    }

    /**
     * Checks whether the access token is still valid.
     *
     * @throws \Picqer\Financials\Exact\ApiException
     */
    public function checkOrAcquireAccessToken()
    {
        // If access token is not set or token has expired, acquire new token
        if (empty($this->accessToken) || $this->tokenHasExpired()) {
            $this->acquireAccessToken();
        }
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param mixed  $body
     * @param array  $params
     * @param array  $headers
     *
     * @throws ApiException
     *
     * @return Request
     */
    private function createRequest($method, $endpoint, $body = null, array $params = [], array $headers = [])
    {
        // Add default json headers to the request
        $headers = array_merge($headers, [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
            'Prefer'       => 'return=representation',
        ]);

        $this->checkOrAcquireAccessToken();

        // If we have a token, sign the request
        if (! $this->needsAuthentication() && ! empty($this->accessToken)) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        // Create param string
        if (! empty($params)) {
            $endpoint .= strpos($endpoint, '?') === false ? '?' : '&';
            $endpoint .= http_build_query($params);
        }

        // Create the request
        $request = new Request($method, $endpoint, $headers, $body);

        return $request;
    }

    /**
     * @param string $url
     * @param array  $params
     * @param array  $headers
     *
     * @throws ApiException
     *
     * @return mixed
     */
    public function get($url, array $params = [], array $headers = [])
    {
        $this->waitIfMinutelyRateLimitHit();
        $url = $this->formatUrl($url, $this->requiresDivisionInRequestUrl($url), $url === $this->nextUrl);

        try {
            $request = $this->createRequest('GET', $url, null, $params, $headers);
            $response = $this->client()->send($request);

            return $this->parseResponse($response, $url != $this->nextUrl);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @param string $url
     * @param mixed  $body
     *
     * @throws ApiException
     *
     * @return mixed
     */
    public function post($url, $body)
    {
        $this->waitIfMinutelyRateLimitHit();
        $url = $this->formatUrl($url);

        try {
            $request = $this->createRequest('POST', $url, $body);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @param string $topic
     * @param mixed  $body
     *
     * @throws ApiException
     *
     * @return mixed
     */
    public function upload($topic, $body)
    {
        $url = $this->getBaseUrl() . '/docs/XMLUpload.aspx?Topic=' . $topic . '&_Division_=' . $this->getDivision();

        try {
            $request = $this->createRequest('POST', $url, $body);
            $response = $this->client()->send($request);

            return $this->parseResponseXml($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @param string $topic
     * @param mixed  $params
     *
     * @throws ApiException
     *
     * @return mixed
     */
    public function download($topic, $params = [])
    {
        $url = $this->getBaseUrl() . '/docs/XMLDownload.aspx?Topic=' . $topic . '&_Division_=' . $this->getDivision();

        try {
            $request = $this->createRequest('GET', $url, null, $params);
            $response = $this->client()->send($request);

            return $this->parseDownloadResponseXml($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @param string $url
     * @param mixed  $body
     *
     * @throws ApiException
     *
     * @return mixed
     */
    public function put($url, $body)
    {
        $this->waitIfMinutelyRateLimitHit();
        $url = $this->formatUrl($url);

        try {
            $request = $this->createRequest('PUT', $url, $body);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @param string $url
     *
     * @throws ApiException
     *
     * @return mixed
     */
    public function delete($url)
    {
        $this->waitIfMinutelyRateLimitHit();
        $url = $this->formatUrl($url);

        try {
            $request = $this->createRequest('DELETE', $url);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->baseUrl . $this->authUrl . '?' . http_build_query([
            'client_id'     => $this->exactClientId,
            'redirect_uri'  => $this->redirectUrl,
            'response_type' => 'code',
            'state'         => $this->state,
        ]);
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
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
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
     * @param bool     $returnSingleIfPossible
     *
     * @throws ApiException
     *
     * @return mixed
     */
    private function parseResponse(Response $response, $returnSingleIfPossible = true)
    {
        try {
            $this->extractRateLimits($response);

            if ($response->getStatusCode() === 204) {
                return [];
            }

            Psr7\Message::rewindBody($response);
            $json = json_decode($response->getBody()->getContents(), true);
            if (false === is_array($json)) {
                throw new ApiException('Json decode failed. Got response: ' . $response->getBody()->getContents());
            }
            if (array_key_exists('d', $json)) {
                if (array_key_exists('__next', $json['d'])) {
                    $this->nextUrl = $json['d']['__next'];
                } else {
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
     * @throws ApiException
     *
     * @return mixed
     */
    private function parseResponseXml(Response $response)
    {
        try {
            if ($response->getStatusCode() === 204) {
                return [];
            }

            $answer = [];
            Psr7\Message::rewindBody($response);
            $simpleXml = new \SimpleXMLElement($response->getBody()->getContents());

            foreach ($simpleXml->Messages->Message as $message) {
                if (null === $message->Topic->Data->attributes()) {
                    $answer[] = (string) $message->Description;
                } else {
                    $keyAlt = (string) $message->Topic->Data->attributes()['keyAlt'];
                    $answer[$keyAlt] = (string) $message->Description;
                }
            }

            return $answer;
        } catch (\RuntimeException $e) {
            throw new ApiException($e->getMessage());
        }
    }

    /**
     * @param Response $response
     *
     * @throws ApiException
     *
     * @return mixed
     */
    private function parseDownloadResponseXml(Response $response)
    {
        try {
            if ($response->getStatusCode() === 204) {
                return [];
            }

            $simpleXml = new \SimpleXMLElement($response->getBody()->__toString());

            return $simpleXml;
        } catch (\RuntimeException $e) {
            throw new ApiException($e->getMessage());
        }
    }

    /**
     * @return mixed
     */
    private function getCurrentDivisionNumber()
    {
        if (empty($this->division)) {
            $me = new Me($this);
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

    private function acquireAccessToken()
    {
        try {
            if (is_callable($this->acquireAccessTokenLockCallback)) {
                call_user_func($this->acquireAccessTokenLockCallback, $this);
            }

            if (is_callable($this->refreshAccessTokenCallback)) {
                call_user_func($this->refreshAccessTokenCallback, $this);
                if (! $this->tokenHasExpired()) {
                    // the refreshed token has not expired, so we are fine to keep using it
                    return;
                }
            }

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

            $response = $this->client()->post($this->getTokenUrl(), $body);

            Psr7\Message::rewindBody($response);
            $body = json_decode($response->getBody()->getContents(), true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $this->accessToken = $body['access_token'];
                $this->refreshToken = $body['refresh_token'];
                $this->tokenExpires = $this->getTimestampFromExpiresIn($body['expires_in']);

                if (is_callable($this->tokenUpdateCallback)) {
                    call_user_func($this->tokenUpdateCallback, $this);
                }
            } else {
                throw new ApiException('Could not acquire tokens, json decode failed. Got response: ' . $response->getBody()->getContents());
            }
        } catch (BadResponseException $ex) {
            $this->parseExceptionForErrorMessages($ex);
        } finally {
            if (is_callable($this->acquireAccessTokenUnlockCallback)) {
                call_user_func($this->acquireAccessTokenUnlockCallback, $this);
            }
        }
    }

    /**
     * Translates expires_in to a Unix timestamp.
     *
     * @param string $expiresIn number of seconds until the token expires
     *
     * @return int
     */
    private function getTimestampFromExpiresIn($expiresIn)
    {
        if (! ctype_digit($expiresIn)) {
            throw new \InvalidArgumentException('Function requires a numeric expires value');
        }

        return time() + (int) $expiresIn;
    }

    /**
     * @return int the Unix timestamp at which the access token expires
     */
    public function getTokenExpires()
    {
        return $this->tokenExpires;
    }

    /**
     * @param int $tokenExpires the Unix timestamp at which the access token expires
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

        return ($this->tokenExpires - 10) < time();
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
                $endPoint,
            ]);
        }

        return implode('/', [
            $this->getApiUrl(),
            $endPoint,
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
    public function setAcquireAccessTokenLockCallback($callback)
    {
        $this->acquireAccessTokenLockCallback = $callback;
    }

    /**
     * @param callable $callback
     */
    public function setAcquireAccessTokenUnlockCallback($callback)
    {
        $this->acquireAccessTokenUnlockCallback = $callback;
    }

    /**
     * @param callable $callback
     */
    public function setTokenUpdateCallback($callback)
    {
        $this->tokenUpdateCallback = $callback;
    }

    /**
     * @param callable $callback
     */
    public function setRefreshAccessTokenCallback($callback)
    {
        $this->refreshAccessTokenCallback = $callback;
    }

    /**
     * Parse the reponse in the Exception to return the Exact error messages.
     *
     * @param Exception $e
     *
     * @throws ApiException
     */
    private function parseExceptionForErrorMessages(Exception $e)
    {
        if (! $e instanceof BadResponseException) {
            throw new ApiException($e->getMessage(), 0, $e);
        }

        $response = $e->getResponse();

        $this->extractRateLimits($response);

        Psr7\Message::rewindBody($response);
        $responseBody = $response->getBody()->getContents();
        $decodedResponseBody = json_decode($responseBody, true);

        if (! is_null($decodedResponseBody) && isset($decodedResponseBody['error']['message']['value'])) {
            $errorMessage = $decodedResponseBody['error']['message']['value'];
        } else {
            $errorMessage = $responseBody;
        }

        if ($reason = $response->getHeaderLine('Reason')) {
            $errorMessage .= " (Reason: {$reason})";
        }

        throw new ApiException('Error ' . $response->getStatusCode() . ': ' . $errorMessage, $response->getStatusCode(), $e);
    }

    /**
     * @return int|null The maximum number of API calls that your app is permitted to make per company, per day
     */
    public function getDailyLimit()
    {
        return $this->dailyLimit;
    }

    /**
     * @return int|null The remaining number of API calls that your app is permitted to make for a company, per day
     */
    public function getDailyLimitRemaining()
    {
        return $this->dailyLimitRemaining;
    }

    /**
     * @return int|null The time at which the rate limit window resets in UTC epoch milliseconds
     */
    public function getDailyLimitReset()
    {
        return $this->dailyLimitReset;
    }

    /**
     * @return int|null The maximum number of API calls that your app is permitted to make per company, per minute
     */
    public function getMinutelyLimit()
    {
        return $this->minutelyLimit;
    }

    /**
     * @return int|null The remaining number of API calls that your app is permitted to make for a company, per minute
     */
    public function getMinutelyLimitRemaining()
    {
        return $this->minutelyLimitRemaining;
    }

    /**
     * @return int|null The time at which the minutely rate limit window resets in UTC epoch milliseconds
     */
    public function getMinutelyLimitReset()
    {
        return $this->minutelyLimitReset;
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
     * https://developers.exactonline.com/#Exact%20Online%20sites.html.
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

    private function extractRateLimits(Response $response)
    {
        $this->dailyLimit = (int) $response->getHeaderLine('X-RateLimit-Limit');
        $this->dailyLimitRemaining = (int) $response->getHeaderLine('X-RateLimit-Remaining');
        $this->dailyLimitReset = (int) $response->getHeaderLine('X-RateLimit-Reset');

        $this->minutelyLimit = (int) $response->getHeaderLine('X-RateLimit-Minutely-Limit');
        $this->minutelyLimitRemaining = (int) $response->getHeaderLine('X-RateLimit-Minutely-Remaining');
        $this->minutelyLimitReset = (int) $response->getHeaderLine('X-RateLimit-Minutely-Reset');
    }

    protected function waitIfMinutelyRateLimitHit()
    {
        if (! $this->waitOnMinutelyRateLimitHit) {
            return;
        }

        $minutelyReset = $this->getMinutelyLimitReset();

        if ($this->getMinutelyLimitRemaining() === 0 && $minutelyReset) {
            // add a second for rounding differences
            $resetsInSeconds = (($minutelyReset / 1000) - time()) + 1;

            // In some rare occasions the outcome of $resetsInSeconds computes into a value that is less than 0.
            // The sleep() method will in this case throw an exception.
            if ($resetsInSeconds < 0) {
                $resetsInSeconds = 0;
            }

            sleep($resetsInSeconds);
        }
    }

    public function setWaitOnMinutelyRateLimitHit(bool $waitOnMinutelyRateLimitHit)
    {
        $this->waitOnMinutelyRateLimitHit = $waitOnMinutelyRateLimitHit;
    }

    private function requiresDivisionInRequestUrl(string $endpointUrl): bool
    {
        return ! in_array($endpointUrl, [
            (new SystemUser($this))->url(),
            (new Me($this))->url(),
        ], true);
    }
}
