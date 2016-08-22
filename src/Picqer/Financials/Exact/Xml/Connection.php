<?php namespace Picqer\Financials\Exact\Xml;

use GuzzleHttp\Psr7\Request;
class Connection extends \Picqer\Financials\Exact\Connection
{
    
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
        $request->body = $request->getBody()->getContents();
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
        $url = $this->formatUrl($url, false, $url == $this->nextUrl);
        try {
            $request = $this->createRequest('GET', $url, null, $params);
            $response = $this->client()->send($request);
            return $response->getBody()->getContents();
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }

    public function post($url, $body, $includeDivision = false)
    {
        $url = $this->formatUrl($url, $includeDivision);

        try {
            $request = $this->createRequest('POST', $url, $body);

            $response = $this->client()->send($request);
            return $response->getBody()->getContents();
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
            $request = $this->createRequest('PUT', $url, $body);
            $response = $this->client()->send($request);

            return $response->getBody()->getContents();
        } catch (Exception $e) {
            $this->parseExceptionForErrorMessages($e);
        }
    }
}
