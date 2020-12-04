<?php

namespace Rankfoundry\LaravelGhlWrapper;

class GhlPipeline extends BaseClass
{
    /**
     * Retrieve a list of all pipelines for location.
     *
     * @param array $params
     *
     * @return mixed
     */
    public function pipelines($apikey)
    {
        return $this->call('pipelines', $apikey, null);
    }

}
