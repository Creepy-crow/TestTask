<?php
namespace App\Github;

use GuzzleHttp\Client;

class ApiData {
    public function saveApiData($path)
    {
        $client = new Client();
        $url = 'https://api.github.com/'.$path;
        $res = $client->get($url);
        $response = json_decode($res->getBody());
        return $response;
    }
}
