<?php

namespace Rankfoundry\LaravelGhlWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;
use MonologHandlerStreamHandler;

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
        $logger = new Logger('Logger');
        $logger->pushHandler(new StreamHandler(storage_path('logs/ghl')));
        $stack = HandlerStack::create();
        $stack->push(
            Middleware::log(
                $logger,
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