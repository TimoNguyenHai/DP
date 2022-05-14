<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690055/feeds.json?results=1');
        $fieldVentilationFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690037/feeds.json?results=1');    
        $fieldValveFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1680507/feeds.json?results=1');    
        $fieldPumpFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690046/feeds.json?results=1');    
        $fieldLightFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690004/feeds.json?results=1');    
        $fieldHeaterFlag = $response->json()['feeds'][0]['field1'];

        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1560931/feeds.json?results=1');    
        $fieldTempSoil = $response->json()['feeds'][0]['field1'];
        $fieldTempWater = $response->json()['feeds'][0]['field2'];
        $fieldLightPercent = $response->json()['feeds'][0]['field3'];
        $fieldSoilMoisturePercent = $response->json()['feeds'][0]['field6'];
        $fieldGas = $response->json()['feeds'][0]['field7'];
        $fieldTankLevel = $response->json()['feeds'][0]['field8'];

        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1657494/feeds.json?results=1');
        $fieldPumpState = $response->json()['feeds'][0]['field1'];
        $fieldVentState = $response->json()['feeds'][0]['field2'];
        $fieldLightState = $response->json()['feeds'][0]['field3'];
        $fieldValveSoilState = $response->json()['feeds'][0]['field8'];
        $fieldHeaterState = $response->json()['feeds'][0]['field4'];
        $fieldTempAir = $response->json()['feeds'][0]['field5'];
        $fieldPressure = $response->json()['feeds'][0]['field6'];
        $fieldHuminity = $response->json()['feeds'][0]['field7'];
        return view('home',compact('fieldVentilationFlag','fieldValveFlag','fieldPumpFlag','fieldLightFlag','fieldHeaterFlag',
        'fieldTempSoil','fieldTempWater','fieldLightPercent','fieldSoilMoisturePercent','fieldGas',
        'fieldPumpState','fieldVentState','fieldLightState','fieldValveSoilState','fieldHeaterState','fieldTempAir','fieldPressure','fieldHuminity','fieldTankLevel'));
    }
    
    public function create()
    {
        $data= user::latest()->first();
        log::debug("YOUTTAG",[$data]);
        return view('next'); // next:- page name created with next.blade.php 
    }
}
