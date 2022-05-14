@extends('layouts.app-coreui')


@section('content')
<div id="weatherapi-weather-widget-4"></div><script type='text/javascript' src='https://www.weatherapi.com/weather/widget.ashx?loc=2294088&wid=4&tu=1&div=weatherapi-weather-widget-4' async></script><noscript><a href="https://www.weatherapi.com/weather/q/miloslavov-2294088" alt="Hour by hour Miloslavov weather">10 day hour by hour Miloslavov weather</a></noscript>

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row justify-content-center" style="margin-top:20px"> 
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Temperature Soil</h5>
                                    <span class="h2 font-weight-bold mb-0">{{number_format($fieldTempSoil, 2, '.', ',')}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldTempSoil > 40)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Warning </span>
                                @elseif ($fieldTempSoil >= 10 and  $fieldTempSoil <= 40)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @elseif ($fieldTempSoil < 10)
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>Bad</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Temperature Water</h5>
                                    <span class="h2 font-weight-bold mb-0">{{number_format($fieldTempWater, 2, '.', ',')}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldTempWater > 40)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Warning </span>
                                @elseif ($fieldTempWater >= 10 and  $fieldTempWater <= 40)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @elseif ($fieldTempWater < 10)
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>Bad</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Light Percent</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$fieldLightPercent}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldLightPercent > 95)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Warning </span>
                                @elseif ($fieldLightPercent >= 15 and  $fieldLightPercent <= 95)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @elseif ($fieldLightPercent < 15)
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>Bad</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Soil Moisture %</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$fieldSoilMoisturePercent}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-percent"></i>

                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldSoilMoisturePercent > 55)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Warning </span>
                                @elseif ($fieldSoilMoisturePercent >= 20 and  $fieldSoilMoisturePercent <= 55)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @elseif ($fieldSoilMoisturePercent < 20)
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>Bad</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top:20px"> 
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Gas BME680</h5>
                                    <span class="h2 font-weight-bold mb-0">{{number_format($fieldGas, 2, '.', ',')}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldGas > 200)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Bad </span>
                                @elseif ($fieldGas <= 200)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Temperature Air</h5>
                                    <span class="h2 font-weight-bold mb-0">{{number_format($fieldTempAir, 2, '.', ',')}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldTempAir > 25)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Warning </span>
                                @elseif ($fieldTempAir >= 15 and  $fieldTempAir <= 25)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @elseif ($fieldTempAir < 15)
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>Bad</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pressure</h5>
                                    <span class="h2 font-weight-bold mb-0">{{number_format($fieldPressure, 2, '.', ',')}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap"> Quality: </span>
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Normal</span>
                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Humidity</h5>
                                    <span class="h2 font-weight-bold mb-0">{{number_format($fieldHuminity, 2, '.', ',')}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                        <i class="fas fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">Quality: </span>
                                @if($fieldHuminity > 60)
                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> Warning </span>
                                @elseif ($fieldHuminity >= 40 and  $fieldHuminity <= 60)
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>Good</span>
                                @elseif ($fieldHuminity < 40)
                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>Bad</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    
<div class="container-fluid mt--7">
    <div class="row justify-content-center" style="margin-top:10px">
        <div class="col-xl-7 mb-5 mb-xl-0">
            <div class="card bg-gradient-default shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="text-uppercase text-muted mb-0 text-center">Actuators</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        {{-- <canvas id="chart-sales" class="chart-canvas"></canvas> --}}
                        <div class="row justify-content-center"> 

                            <div class="card-body">
                                <!-- Chart -->
                                <div class="chart">

                                    <div class="container text-center">
                                        <div class="row justify-content-center" style="margin-top:10px">
                                            <div class="col-xl-6 col-lg-3">
                                                <div class="card card-stats mb-4 mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">Pump State: </h5>
                                                                <span class="h2 font-weight-bold mb-0">@if($fieldPumpState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                    <i class="fas fa-percent"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-3">
                                                <div class="card card-stats mb-4 mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">Ventilation State: </h5>
                                                                <span class="h2 font-weight-bold mb-0">@if($fieldVentState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                    <i class="fas fa-percent"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                 </div>

                                 <div class="container">
                                    <div class="row justify-content-center text-center" style="margin-top:10px">
                                        <div class="col-xl-6 col-lg-3">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Light State: </h5>
                                                            <span class="h2 font-weight-bold mb-0">@if($fieldLightState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-3">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Soil Valve State: </h5>
                                                            <span class="h2 font-weight-bold mb-0">@if($fieldValveSoilState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>


                                  {{-- <div class="container">
                                    <div class="row justify-content-center text-center" style="margin-top:10px">
                                        <div class="col-xl-6 col-lg-3">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Heater State: </h5>
                                                            <span class="h2 font-weight-bold mb-0">@if($fieldHeaterState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        
                                 <div class="container">
                                    <div class="row justify-content-center text-center" style="margin-top:10px">
                                        <div class="col-xl-6 col-lg-3">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Heater State: </h5>
                                                            <span class="h2 font-weight-bold mb-0">@if($fieldHeaterState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-3">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Tank Level: </h5>
                                                            <span class="h2 font-weight-bold mb-0">@if($fieldTankLevel == 1) <p style="color:green;">OK</p> @else <p style="color:red;">LOW</p> @endif</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                <i class="fas fa-percent"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                          
                          
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Update Information</h6>
                            <h2 class="mb-0">Channel Status Update</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/status/recent"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
