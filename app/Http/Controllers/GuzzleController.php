<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class GuzzleController extends Controller
{
    //
    public function getRemoteData()
    {
        $client = new Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json'],
            ]);
        $response = $client->request('POST','https://api.thingspeak.com/channels/1681543/feeds.json?results=2',[

            'json' => [
                    'code' => '255'   
                    ],
            
            ]);

        $data = $response -> getBody();
        $data = json_decode($data);
    }
}   
