<?php namespace Picqer\Financials;

use CommerceGuys\Guzzle\Plugin\Oauth2\GrantType\AuthorizationCode;
use CommerceGuys\Guzzle\Plugin\Oauth2\GrantType\RefreshToken;
use CommerceGuys\Guzzle\Plugin\Oauth2\Oauth2Plugin;
use Guzzle\Http\Client;

class Exact {

    //private $authUrl = 'https://start.exactonline.nl/api/oauth2/auth';
    //private $tokenUrl = 'https://start.exactonline.nl/api/oauth2/token';

    private $apiUrl = 'https://start.exactonline.nl/api';

    /**
     * @var Client
     */
    private $client;

    private $accessToken;
    private $refreshToken;


    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->setClientDefaults();
    }

    private function setClientDefaults()
    {
        $this->client->setDefaultOption('headers/Accept', 'application/json');
    }

    public function setOauth2Params($code, $redirectUri, $clientId, $clientSecret)
    {
        $params = array(
            'code' => $code,
            'redirect_uri' => $redirectUri,
            'client_id' => $clientId,
            'client_secret' => $clientSecret
        );

        $oauth2Client = new Client($this->apiUrl . '/oauth2/token');
        $grantType = new AuthorizationCode($oauth2Client, $params);
        $refreshTokenGrantType = new RefreshToken($oauth2Client, $params);
        $oauth2Plugin = new Oauth2Plugin($grantType, $refreshTokenGrantType);
        $this->client->addSubscriber($oauth2Plugin);

        $this->accessToken = $oauth2Plugin->getAccessToken();
        $this->refreshToken = $oauth2Plugin->getRefreshToken();
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    private function sendRequest($endpoint, $method = 'GET', $payload = array())
    {
        $method = strtolower($method);

        $paramType = $method == 'get' ? 'query' : 'body';

        $request = $this->client->get(
            $this->apiUrl . $endpoint,
            null,
            array(
                $paramType => $payload
            )
        );

        $response = $request->send();

        return $response->json();
    }

    public function getAuthUrl($clientId, $redirectUri)
    {
        return $this->apiUrl . '/oauth2/auth?' . http_build_query(array(
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'response_type' => 'code'
        ));
    }

    public function me()
    {
        return $this->sendRequest('/v1/current/Me');
    }

}


