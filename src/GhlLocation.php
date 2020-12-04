<?php

namespace Rankfoundry\LaravelGhlWrapper;

class GhlLocation extends BaseClass
{
    /**
     * Retrieve a list of all agency locations.
     *
     * @param array $params
     *
     * @return mixed
     */
    public static function locations($apikey)
    {
        return $this->call('locations', $apikey);
    }
    
    /**
     * Retrieve a location using id.
     *
     * @param string $id
     * @param array  $params
     *
     * @return mixed
     */
    public static function single($id, $apikey, array $params)
    {
        return $this->call('locations/'.$id, $apikey, $params);
    }
}
