<?php

namespace App\Helpers;

use GuzzleHttp;

class Http
{
    public static function get($url, $query = [])
    {
        // $header = ['X-Auth-Token' => env('API_TOKEN')];

        $client = new GuzzleHttp\Client();
        $response = $client->get($url, [
            // 'headers' => $header,
            'query' => $query
        ]);
        return $response;
    }

    public static function post($url, $body)
    {
        $header = ['X-Auth-Token' => env('API_TOKEN')];

        $client = new GuzzleHttp\Client();
        $response = $client->post($url, [
            'form_params' => $body,
            'headers' => $header
        ]);
        return $response;
    }
}
