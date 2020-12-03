<?php

namespace Rankfoundry\LaravelGhlWrapper;

use GuzzleHttp\Client;

class BaseClass
{
   /**
     * Base url of GHL api.
     *
     * @var string
     */
    private $baseUrl = 'https://rest.gohighlevel.com/v1/';

    /**
     * Response from GHL api.
     */
    private $response;

    /**
     * Calls GHL api.
     *
     * @param string $url
     * @param array  $params
     *
     * @return mix
     */
    protected function call($url, $apikey, $params)
    {
        $client = new Client([
            'base_uri' => $this->baseUrl,
        ]);
        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization'  => 'Bearer ' . $apikey,
            ],
            'form_params' => $params,
            'query'       => $params,
        ]);

        return $response->getBody();
    } 
}