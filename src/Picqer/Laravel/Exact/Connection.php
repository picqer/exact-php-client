<?php

namespace Picqer\Laravel\Exact;

use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Config;
use Picqer\Financials\Exact\Connection as BaseConnection;

class Connection extends BaseConnection
{
    
    /**
     * @var \Picqer\Laravel\Exact\DefaultProfile
     */
    protected $token_profile;
    
    /**
     * @throws \Exception
     */
    protected function beforeValidatingAccessToken()
    {
        parent::beforeValidatingAccessToken();
    
        $current_refresh_token = $this->getRefreshToken();
        $latest_refresh_token = $this->getProfile()
            ->getLatestRefreshToken($current_refresh_token);
    
        if($latest_refresh_token !== $current_refresh_token) {
            $this->useNewRefreshToken($latest_refresh_token);
        }
    }
    
    /**
     * @return bool
     * @throws \Exception
     */
    protected function minuteLimitExceeded()
    {
        return $this->getProfile()->getRemainingMinuteLimit() <= $this->callsLimit * 0.10;
    }
    
    /**
     * @param \GuzzleHttp\Psr7\Response $response
     *
     * @throws \Exception
     */
    protected function handleRateLimitsFromResponse(Response $response)
    {
        if($response->hasHeader('X-RateLimit-Minutely-Limit') === false) {
            return;
        }
        
        $this->callsLimit = (int) $response->getHeaderLine('X-RateLimit-Minutely-Limit');
        $this->callsLeft = (int) $response->getHeaderLine('X-RateLimit-Minutely-Remaining');
        $this->responseTimestamp = strtotime($response->getHeaderLine('Date'));
        
        $this->getProfile()->handleMinuteLimit($this->callsLeft);
    }
    
    /**
     * @throws \Exception
     */
    protected function refreshTokens()
    {
        $this->getProfile()->handleNewTokens(
            $this->getResponseTimestamp(),
            $this->getRefreshToken(),
            $this->getAccessToken()
        );
    }
    
    /**
     * @throws \Exception
     *
     * @return \Picqer\Laravel\Exact\DefaultProfile
     */
    protected function getProfile()
    {
        $profile_class_name = Config::get('exact.profile', DefaultProfile::class);
        
        $profile = new $profile_class_name();
        if($profile instanceof DefaultProfile === false) {
            throw new \Exception('Profile must extend \Picqer\Financials\Exact\DefaultProfile');
        }
        
        return $this->token_profile = $profile;
    }
    
    /**
     * @param $token
     *
     * @throws \Picqer\Financials\Exact\ApiException
     */
    protected function useNewRefreshToken($token)
    {
        $this->setRefreshToken($token);
    
        // set access token to empty string so a new one will be generated..
        $this->setAccessToken('');
        $this->acquireAccessToken();
    }
    
}