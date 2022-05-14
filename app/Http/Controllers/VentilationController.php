<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Session;

class VentilationController extends Controller
{
    //
    public function index()
    {   
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1690055/feeds.json?results=1');
        // $response->json();
        $fieldVentilationFlag = $response->json()['feeds'][0]['field1'];
        
        $response = Http::withoutVerifying()->get('https://api.thingspeak.com/channels/1657494/feeds.json?results=1');
        $fieldTemperatureAir = $response->json()['feeds'][0]['field5'];
        $fieldVentState = $response->json()['feeds'][0]['field2'];

        return view('ventilation.index',compact('fieldVentilationFlag','fieldTemperatureAir','fieldVentState'));
    }
    public function manualVentilation(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=DPBRYNLECC9URM83&field1=1');
        Session::flash('success', __('The Ventilation is swaping to Manual Control! Please wait!'));
        return redirect()->back();
    }
    public function automationVentilation(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=DPBRYNLECC9URM83&field1=0');
        Session::flash('failure', __('The Ventilation is swaping to Automation Control! Please wait!'));
        return redirect()->back();
    }


    public function onManualVentilation(Request $request)
    { 
        Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=S1P0IL5IM9OKDGXK&field1=1');
        Session::flash('success', __('Switching Ventilation to Manual ON! Please wait!'));
        return redirect()->back();
    }
    public function offManualVentilation(Request $request)
    { 
         Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->post('https://api.thingspeak.com/update?api_key=S1P0IL5IM9OKDGXK&field1=0');
        Session::flash('failure', __('Switching Ventilation to Manual OFF! Please wait!'));
        return redirect()->back();
    }

}
