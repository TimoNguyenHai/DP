<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Session;

class LightController extends Controller
{
    //
    public function index()
    {   
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690046/feeds.json?results=1');    
        $fieldLightFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1560931/feeds.json?results=1');    
        $fieldLightPercent = $response->json()['feeds'][0]['field3'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1657494/feeds.json?results=1');    
        $fieldLightState = $response->json()['feeds'][0]['field3'];
        return view('light.index',compact('fieldLightFlag','fieldLightPercent','fieldLightState'));
    }

    public function manualLight(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=N59PPXI9D6E4CUH3&field1=1');
        Session::flash('success', __('The Light is swaping to Manual Control! Please wait!'));
        return redirect()->back();
    }
    public function automationLight(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=N59PPXI9D6E4CUH3&field1=0');
        Session::flash('failure', __('The Light is swaping to Automation Control! Please wait!'));
        return redirect()->back();
    }


    public function onManualLight(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=RFZRIQF5PX6O7TR4&field1=1');
        Session::flash('success', __('Switching Light to Manual ON! Please wait!'));
        return redirect()->back();
    }
    public function offManualLight(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=RFZRIQF5PX6O7TR4&field1=0');
        Session::flash('success', __('Switching Light to Manual OFF! Please wait!'));
        return redirect()->back();
    }
}
