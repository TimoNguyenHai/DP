<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Session;

class PumpController extends Controller
{
    //
    public function index()
    {   
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1680507/feeds.json?results=1');    
        $fieldPumpFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1657494/feeds.json?results=1');
        $fieldValveState = $response->json()['feeds'][0]['field8'];
        $fieldPumpState = $response->json()['feeds'][0]['field1'];
        return view('pump.index',compact('fieldPumpFlag','fieldValveState','fieldPumpState'));
    }
    public function manualPump(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=5XFU4BAC99BK9VIX&field1=1');
        Session::flash('success', __('The Aquaponic Pump is swaping to Manual Control! Please wait!'));
        // $pumpFlagOn = true;
        // return redirect()->back()->with('pumpFlagOn', $pumpFlagOn);
        return redirect()->back();
        
    }
    public function automationPump(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=5XFU4BAC99BK9VIX&field1=0');
        Session::flash('failure', __('The Aquaponic Pump is running! Please wait!'));
        return redirect()->back();

    }


    public function onManualPump(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=RP3BQ4J34MP51A37&field1=1');
        Session::flash('success', __('Switching Aquaponic Pump to Manual ON! Please wait!'));
        return redirect()->back();
    }
    public function offManualPump(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=RP3BQ4J34MP51A37&field1=0');
        Session::flash('failure', __('Switching Aquaponic Pump to Manual OFF! Please wait!'));
        return redirect()->back();
    }
}
