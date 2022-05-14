<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Session;

class ValveSoilController extends Controller
{
    //
    public function index()
    {   
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690037/feeds.json?results=1');    
        $fieldValveFlag = $response->json()['feeds'][0]['field1'];
        
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1560931/feeds.json?results=1');
        $fieldMoisturePercent = $response->json()['feeds'][0]['field6'];

        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1657494/feeds.json?results=1');
        $fieldValveState = $response->json()['feeds'][0]['field8'];
        return view('valve.index',compact('fieldValveFlag','fieldValveState','fieldMoisturePercent'));

    }
    public function manualValveSoil(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=BQ9UTSPBYO7IIUQJ&field1=1');
        Session::flash('success', __('The Soil Valve is swaping to Manual Control! Please wait!'));
        return redirect()->back();
    }
    public function automationValveSoil(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=BQ9UTSPBYO7IIUQJ&field1=0');
        Session::flash('failure', __('The Soil Valve is swaping to Automation Control! Please wait!'));
        return redirect()->back();
    }


    public function onManualValveSoil(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=WRPEHC8R9TX6NOAD&field1=1');
        Session::flash('success', __('Switching Soil Valve to Manual ON! Please wait!'));
        return redirect()->back();
    }
    public function offManualValveSoil(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=WRPEHC8R9TX6NOAD&field1=0');
        Session::flash('failure', __('Switching Soil Valve to Manual OFF! Please wait!'));
        return redirect()->back();
    }
}
