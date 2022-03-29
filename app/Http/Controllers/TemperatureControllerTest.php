<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureControllerTest extends Controller
{
    public function index()
    {
        return view('temperature-test.index');

    }
}
