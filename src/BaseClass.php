<?php

namespace Rankfoundry\LaravelGhlWrapper;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\MessageFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Log;

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
        $logger->pushHandler(new StreamHandler(storage_path('logs/ghl.log')));
        
        $stack = HandlerStack::create();
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter(">>>>>>>>\n{request}\n<<<<<<<<\n{response}\n--------\n{error}\n++++++++++\n{req_headers}\n**********\n{res_headers}")
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
            'query'       => $params,
        ]);
                
        return json_decode($response->getBody()->getContents());
    } 
    
    /**
     * Calls GHL api.
     *
     * @param string $url
     * @param array  $params
     *
     * @return obj
     */
    protected function call2($url, $apikey, $params)
    {
        $logger = new Logger('Logger');
        $logger->pushHandler(new StreamHandler(storage_path('logs/ghl.log')));
        
        $stack = HandlerStack::create();
        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter(">>>>>>>>\n{request}\n<<<<<<<<\n{response}\n--------\n{error}\n++++++++++\n{req_headers}\n**********\n{res_headers}")
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
            'query'       => $params,
        ]);
        
        return json_decode($response->getBody());
    }
}