<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ReceiverThingspeak;
 

class ReceiverThingspeakController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.thingspeak.com/channels/1560931/feeds.json?results=1');
        return Http::get('http://example.com/users/1')['field6'];
    }
}
