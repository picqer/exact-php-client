<?php namespace Picqer\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\IdentityProvider;

class Exact extends IdentityProvider
{
    public $responseType = 'string';

    public function urlAuthorize()
    {
        return 'https://start.exactonline.nl/api/oauth2/auth';
    }

    public function urlAccessToken()
    {
        return 'https://start.exactonline.nl/api/oauth/token';
    }

    public function getAuthorizationUrl($options = array())
    {
        $params = array(
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'response_type' => isset($options['response_type']) ? $options['response_type'] : 'code',
        );

        return $this->urlAuthorize() . '?' . $this->httpBuildQuery($params, '', '&', PHP_QUERY_RFC1738);
    }


    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        // TODO: Implement urlUserDetails() method.
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        // TODO: Implement userDetails() method.
    }
}
