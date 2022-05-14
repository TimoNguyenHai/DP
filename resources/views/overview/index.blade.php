@extends('layouts.app-coreui')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <title>Overview</title>
          <div class="row justify-content-center" style="margin-top:10px"> 
  
          <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 mb-5 mb-xl-0">
                    <div class="card bg-gradient-default shadow">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="text-uppercase ls-1 mb-1">Overview</h2>
                                </div>
                            </div>
                        </div>
          <div class="row justify-content-center" style="margin-top:10px"> 

          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Temperature+Soil++%5B%C2%B0C%5D&type=line"></iframe>
          </div>

          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Temperature+Water++%5B%C2%B0C%5D&type=line"></iframe>
          </div>

        
          </div>

          <div class="row justify-content-center" style="margin-top:10px"> 

          
          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Soil+Moisture+Percent+Left&type=line"></iframe>
          </div>
          
        
          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Soil+Moisture+Percent+Right&type=line"></iframe>
          </div>
          
          </div>

          <div class="row justify-content-center" style="margin-top:10px"> 

          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Soil+Moisture+Percent+Average&type=line"></iframe>
          </div>
          
        
          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1657494/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Pressure&type=line"></iframe>
          </div>


          </div>  

          <div class="row justify-content-center" style="margin-top:10px"> 

          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1657494/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Temperature+Air&type=step"></iframe>
          </div>
          
        
          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1657494/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Humidity&type=line"></iframe>
          </div>


          </div>  

          <div class="row justify-content-center" style="margin-top:10px"> 

          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Gas+BME680+%5BkOhm%5D&type=line"></iframe>
          </div>

          <div class="col-sm-10 col-lg-5">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1000&title=Light+%5BLux%5D&type=line"></iframe>
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
@endsection
