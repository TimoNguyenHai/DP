<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Session;

class HeaterController extends Controller
{
    //
    public function index()
    {   
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690004/feeds.json?results=1');    
        $fieldHeaterFlag = $response->json()['feeds'][0]['field1'];
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1657494/feeds.json?results=1');
        $fieldTemperatureAir = $response->json()['feeds'][0]['field5'];
        $fieldHeaterState = $response->json()['feeds'][0]['field4'];

        return view('heater.index',compact('fieldHeaterFlag','fieldTemperatureAir','fieldHeaterState'));
    }

    public function manualHeater(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=LAFFDCZB00D7EOQO&field1=1');
        Session::flash('success', __('The Heater is swaping to Manual Control! Please wait!'));
        return redirect()->back();
    }
    public function automationHeater(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=LAFFDCZB00D7EOQO&field1=0');
        Session::flash('failure', __('The Heater is swaping to Automation Control! Please wait!'));
        return redirect()->back();
    }


    public function onManualHeater(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=X4I8DT4ZADW48MDI&field1=1');
        Session::flash('success', __('Switching Heater to Manual ON! Please wait!'));
        return redirect()->back();
    }
    public function offManualHeater(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=X4I8DT4ZADW48MDI&field1=0');
        Session::flash('failure', __('Switching Heater to Manual OFF! Please wait!'));
        return redirect()->back();
    }
}
