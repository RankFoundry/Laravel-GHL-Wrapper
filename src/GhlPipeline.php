<?php

namespace Rankfoundry\LaravelGhlWrapper;

class GhlPipeline extends BaseClass
{
    /**
     * Retrieve a list of all pipelines for location.
     *
     * @apikey string $apikey
     *
     * @return mixed
     */
    public function pipelines($apikey)
    {
        return $this->call2('pipelines', $apikey, null);
    }

    /**
     * Retrieve a list of opportunities.
     *
     * @apikey string $apikey
     * @pipeline string $pipeline
     * @param array $params
     *
     * @return mixed
     */
    public function opportunities($apikey, $pipeline, $params)
    {
        return $this->call2('pipelines/'.$pipeline.'/opportunities', $apikey, $params);
    }
}
