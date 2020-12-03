<?php

namespace Rankfoundry\LaravelGhlWrapper;

class GhlLocation extends Rankfoundry\LaravelGhlWrapper\BaseClass
{
    /**
     * Retrieve a list of all agency locations.
     *
     * @param array $params
     *
     * @return mixed
     */
    public function locations($apikey, array $params)
    {
        return $this->call('locations', $apikey, $params);
    }
    
    /**
     * Retrieve a location using id.
     *
     * @param string $id
     * @param array  $params
     *
     * @return mixed
     */
    public function single($id, $apikey, array $params)
    {
        return $this->call('locations/'.$id, $apikey, $params);
    }
}
