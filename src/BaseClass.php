<?php

namespace Rankfoundry\LaravelGhlWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;

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
     * @return obj
     */
    protected function call($url, $apikey, $params)
    {
        $stack = HandlerStack::create();
        $stack->push(
            Middleware::log(
                new Logger('Logger'),
                new MessageFormatter('{req_body} - {res_body}')
            )
        );
        
        $client = new Client([
            'base_uri' => $this->baseUrl,
            'handler' => $stack,
        ]);
        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization'  => 'Bearer ' . $apikey,
            ],
            'form_params' => $params,
            'query'       => $params,
        ]);
                
        return json_decode($response->getBody()->getContents());
    } 
}