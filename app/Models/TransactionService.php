<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon;

class TransactionService
{
    public function __construct(){
        $this->transaction_url = config('app.transaction_url');
    }

    public function get_response($arr){
        $client = new client(['verify' => false]);

        $url = $this->transaction_url.$arr['url'];

        $response = $client->get($url, [
            'json'    => $arr,
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
        ])->getbody();

        return json_decode($response, true);
    }

    public function post_response($arr){
        $client = new client(['verify' => false]);

        $url = $this->transaction_url.$arr['url'];

        $response = $client->post($url, [
            'json'    => $arr,
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
        ])->getbody();

        return json_decode($response, true);
    }

    public function put_response($arr){
        $client = new client(['verify' => false]);

        $url = $this->transaction_url.$arr['url'];

        $response = $client->put($url, [
            'json'    => $arr,
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
        ])->getbody();

        return json_decode($response, true);
    }

    public function delete_response($arr){
        $client = new client(['verify' => false]);

        $url = $this->transaction_url.$arr['url'];

        $response = $client->delete($url, [
            'json'    => $arr,
            'headers' => array(
                'Content-Type' => 'application/json',
            ),
        ])->getbody();

        return json_decode($response, true);
    }
}
