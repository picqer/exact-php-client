<?php namespace Picqer\Financials\Exact;

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
     * @var string
     */
    protected $baseUrl = 'https://start.exactonline.nl';

    /**
     * @var string
     */
    protected $apiUrl = '/api/v1';

    /**
     * @var string
     */
    protected $authUrl = '/api/oauth2/auth';

    /**
     * @var string
     */
    protected $tokenUrl = '/api/oauth2/token';

    /**
     * @var
     */
    protected $exactClientId;

    /**
     * @var
     */
    protected $exactClientSecret;

    /**
     * @var
     */
    protected $authorizationCode;

    /**
     * @var
     */
    protected $accessToken;

    /**
     * @var
     */
    protected $tokenExpires;

    /**
     * @var
     */
    protected $refreshToken;

    /**
     * @var
     */
    protected $redirectUrl;

    /**
     * @var
     */
    protected $division;

    /**
     * @var Client
     */
    protected $client;

    /**
     *
     */
    protected $middleWares = [];


    /**
    * @var
    */
    public $nextUrl = null;

    /**
     * @return Client
     */
    protected function client()
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
     * @param string $method
     * @param $endpoint
     * @param null $body
     * @param array $params
     * @param array $headers
     * @return Request
     */
    protected function createRequest($method = 'GET', $endpoint, $body = null, array $params = [], array $headers = [])
    {
        // Add default json headers to the request
        $headers = array_merge($headers, [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ]);

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

    /**
     * @param $url
     * @param array $params
     * @return mixed
     * @throws ApiException
     */
    public function get($url, array $params = [])
    {
        $url = $this->formatUrl($url, $url !== 'current/Me', $url == $this->nextUrl);

        try {
            $request = $this->createRequest('GET', $url, null, $params);
            $response = $this->client()->send($request);

            return $this->parseResponse($response);
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    /**
     * @param $url
     * @param $body
     * @return mixed
     * @throws ApiException
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
    }

    /**
     * @param $url
     * @param $body
     * @return mixed
     * @throws ApiException
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
    }

    /**
     * @param $url
     * @return mixed
     * @throws ApiException
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
     * @return mixed
     * @throws ApiException
     */
    protected function parseResponse(Response $response)
    {
        try {

            if ($response->getStatusCode() === 204) {
                return [];
            }

            Psr7\rewind_body($response);
            $json = json_decode($response->getBody()->getContents(), true);
            if (array_key_exists('d', $json)) {
                if (array_key_exists('results', $json['d'])) {
                    if (count($json['d']['results']) == 1) {
                        return $json['d']['results'][0];
                    }
                    if (array_key_exists('__next', $json['d'])) {
                        $this->nextUrl = $json['d']['__next'];
                    }
                    else {
                        $this->nextUrl = null;
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
     * @return mixed
     */
    protected function getCurrentDivisionNumber()
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

    protected function acquireAccessToken()
    {
        // If refresh token not yet acquired, do token request
        if (empty($this->refreshToken)) {
            $body = [
                'form_params' => [
                    'redirect_uri' => $this->redirectUrl,
                    'grant_type' => 'authorization_code',
                    'client_id' => $this->exactClientId,
                    'client_secret' => $this->exactClientSecret,
                    'code' => $this->authorizationCode
                ]
            ];
        } else { // else do refresh token request
            $body = [
                'form_params' => [
                    'refresh_token' => $this->refreshToken,
                    'grant_type' => 'refresh_token',
                    'client_id' => $this->exactClientId,
                    'client_secret' => $this->exactClientSecret,
                ]
            ];
        }

        $response = $this->client()->post($this->getTokenUrl(), $body);

        if ($response->getStatusCode() == 200) {
            Psr7\rewind_body($response);
            $body = json_decode($response->getBody()->getContents(), true);

            if (json_last_error() === JSON_ERROR_NONE) {
                $this->accessToken  = $body['access_token'];
                $this->refreshToken = $body['refresh_token'];
                $this->tokenExpires = $this->getDateTimeFromExpires($body['expires_in']);
            } else {
                throw new ApiException('Could not acquire tokens, json decode failed. Got response: ' . $response->getBody()->getContents());
            }
        } else {
            throw new ApiException('Could not acquire or refresh tokens');
        }
    }


    protected function getDateTimeFromExpires($expires)
    {
        if (!is_numeric($expires)) {
            throw new \InvalidArgumentException('Function requires a numeric expires value');
        }

        return time() + 600;
    }

    /**
     * @return mixed
     */
    public function getTokenExpires()
    {
        return $this->tokenExpires;
    }

    /**
     * @param mixed $tokenExpires
     */
    public function setTokenExpires($tokenExpires)
    {
        $this->tokenExpires = $tokenExpires;
    }

    protected function tokenHasExpired()
    {
        if (empty($this->tokenExpires)) {
            return true;
        }

        return $this->tokenExpires <= time();
    }

    protected function formatUrl($endPoint, $includeDivision = true, $formatNextUrl = false)
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
     * Parse the reponse in the Exception to return the Exact error messages
     * @param Exception $e
     * @throws ApiException
     */
    protected function parseExceptionForErrorMessages(Exception $e)
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
    protected function getApiUrl()
    {
        return $this->baseUrl . $this->apiUrl;
    }

    /**
     * @return string
     */
    protected function getTokenUrl()
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
