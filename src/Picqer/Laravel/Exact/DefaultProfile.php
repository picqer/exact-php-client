<?php

namespace Picqer\Laravel\Exact;

use DateInterval;
use DateTime;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class DefaultProfile
{
    
    /**
     * @var string
     */
    protected $limit_cache_name = 'picqer_minute_limit';
    
    /**
     * @var string
     */
    protected $token_lock_name = 'picqer_exact_token_lock';
    
    /**
     * @var string
     */
    protected $token_history_name = 'picqer_exact_token_history';
    
    /**
     * @var string
     */
    protected $token_last_value = 'picqer_exact_token_last';
    
    /**
     * @var string
     */
    protected $limit_lock_name = 'picqer_exact_limit_lock';
    
    /**
     * @var
     */
    protected $acquiring_lock_tries = 0;
    
    /**
     * @param string $response_timestamp
     * @param string $refresh_token
     * @param string $access_token
     *
     * @return bool
     * @throws \Exception
     */
    public function handleNewTokens($response_timestamp, $refresh_token, $access_token)
    {
        $this->resetAcquiringLockTries();
        if($this->acquireLock($this->token_lock_name) === false) {
            throw new \Exception('Could not acquire lock..');
        }
        
        $refreshed = false;
        if($this->isNewRefreshToken($response_timestamp, $refresh_token)) {
            $this->saveNewTokens($response_timestamp, $refresh_token, $access_token);
            $this->saveTokenToHistory($response_timestamp, $refresh_token, $access_token);
            $this->saveLastToken($refresh_token);
    
            $refreshed = true;
        }
        
        $this->releaseLock($this->token_lock_name);
        
        return $refreshed;
    }
    
    /**
     * @param $fallback_token
     *
     * @return string
     * @throws \Exception
     */
    public function getLatestRefreshToken($fallback_token)
    {
        if($this->acquireLock($this->token_lock_name) === false) {
            throw new \Exception('Could not acquire lock..');
        }
        
        $return = Cache::get($this->token_last_value, $fallback_token);
        $this->releaseLock($this->token_lock_name);
        return $return;
    }
    
    /**
     * @param $response_timestamp
     * @param $refresh_token
     *
     * @return bool
     */
    protected function isNewRefreshToken($response_timestamp, $refresh_token)
    {
        $tokens = Cache::get($this->token_history_name, []);
        
        foreach($tokens as $token) {
            if($token['refresh_token'] === $refresh_token) {
                return false;
            }
            if($token['time'] > $response_timestamp) {
                return false;
            }
        }
        
        return true;
    }
    
    /**
     * @param $response_timestamp
     * @param $refresh_token
     * @param $access_token
     *
     * @throws \Exception
     */
    protected function saveTokenToHistory($response_timestamp, $refresh_token, $access_token)
    {
        $history = Cache::get($this->token_history_name, []);
        
        $merged_history = array_merge($history, [
            [
                'refresh_token' => $refresh_token,
                'access_token'  => $access_token,
                'time'          => $response_timestamp,
            ]
        ]);
        
        Cache::put($this->token_history_name, $merged_history, $this->getDateTimeCacheTTL());
    }
    
    /**
     * @param $refresh_token
     *
     * @throws \Exception
     */
    protected function saveLastToken($refresh_token)
    {
        Cache::put($this->token_last_value, $refresh_token, $this->getDateTimeCacheTTL());
    }
    
    /**
     * @param string $response_time
     * @param string $refresh_token
     * @param string $access_token
     *
     * @throws \Exception
     */
    protected function saveNewTokens($response_time, $refresh_token, $access_token)
    {
        // save all received tokens so we can't
        // save an old token after the process paused
        
        // todo: implement method for saving your tokens :)
    }
    
    /**
     * @return int
     */
    public function getRemainingMinuteLimit()
    {
        return Cache::get($this->limit_cache_name, 6);
    }
    
    /**
     * @param int $limit
     *
     * @throws \Exception
     */
    public function handleMinuteLimit($limit)
    {
        $this->resetAcquiringLockTries();
        if($this->acquireLock($this->limit_lock_name) === false) {
            throw new \Exception('Could not acquire lock..');
        }
        
        Cache::put($this->limit_cache_name, $limit, $this->getDateTimeCacheTTL());
    
        $this->releaseLock($this->limit_lock_name);
    }
    
    /**
     * @param string $limit
     *
     * @throws \Exception
     */
    protected function saveMinuteLimit($limit)
    {
        Cache::put($this->limit_cache_name, $limit, $this->getDateTimeCacheTTL());
    }
    
    protected function resetAcquiringLockTries()
    {
        $this->acquiring_lock_tries = 0;
    }
    
    /**
     * @param $key
     *
     * @return bool
     * @throws \Exception
     */
    protected function acquireLock($key)
    {
        if($this->acquiring_lock_tries >= 20) {
            return false;
        }
    
        $this->acquiring_lock_tries++;
        
        if(Cache::has($key)) {
            $this->sleepForLock();
            return $this->acquireLock($key);
        }
        
        $random_value = Str::random();
        Cache::put($key, $random_value, $this->getDateTimeCacheTTL(5));
        
        $this->sleepForLock();
        
        if(Cache::get($key) === $random_value) {
            return true;
        }
        
        return $this->acquireLock($key);
    }
    
    /**
     * @param string $key
     */
    protected function releaseLock($key)
    {
        Cache::forget($key);
    }
    
    /**
     * Sleep between 20 and 50 milliseconds
     */
    protected function sleepForLock()
    {
        usleep(rand(20000, 50000));
    }
    
    /**
     * @param int $seconds
     *
     * @return \DateTime
     * @throws \Exception
     */
    protected function getDateTimeCacheTTL($seconds = 120)
    {
        return (new DateTime())->add(new DateInterval('PT' . $seconds . 'S'));
    }
    
}
