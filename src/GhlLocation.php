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
    public function locations($apikey)
    {
        return $this->call2('locations', $apikey, null);
    }
    
    /**
     * Retrieve a location using id.
     *
     * @param string $id
     * @param array  $params
     *
     * @return mixed
     */
    public function single($id, $apikey)
    {
        return $this->call2('locations/'.$id, $apikey, null);
    }
}
