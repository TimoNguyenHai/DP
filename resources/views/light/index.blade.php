@extends('layouts.app-coreui')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
        <title>Light State</title>
        <div class="row justify-content-center" style="margin-top:10px"> 

        <div class="container-fluid mt--7">
          <div class="row">
              <div class="col-xl-8 mb-5 mb-xl-0">
                  <div class="card bg-gradient-default shadow">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h2 class="text-uppercase ls-1 mb-1">Light State</h2>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <!-- Chart -->
                          <div class="chart">
                              <!-- Chart wrapper -->
                              {{-- <canvas id="chart-sales" class="chart-canvas"></canvas> --}}
                              <div class="row justify-content-center" style="margin-top:10px"> 
                                  <div class="col-sm-12 col-lg-6">
                                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=1500&title=Light+Percent+%5B%25%5D&type=line"></iframe>
                                  </div> 
                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4">
                  <div class="card shadow">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h6 class="text-uppercase text-muted ls-1 mb-1">Update Information</h6>
                                  <h2 class="mb-0">Status:</h2>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <!-- Chart -->
                          <div class="chart">
                            <div class="card card-stats col-sm-10 col-lg-10 text-center">
                              <div class="card-body">
                                <h5 class="card-title text-uppercase text-muted mb-0">Light Percent: </h5>
                                <span class="h2 font-weight-bold mb-0">{{$fieldLightPercent}} %</span>
                              </div>
                          </div>
                          <div class="card card-stats col-sm-10 col-lg-10 text-center">
                            <div class="card-body">
                              <h5 class="card-title text-uppercase text-muted mb-0">Light State: </h5>
                              <span class="h2 font-weight-bold mb-0">@if($fieldLightState == 1) <p style="color:green;">ON</p> @else <p style="color:red;">OFF</p> @endif</span>
                            </div>
                        </div>    
                      </div>
                      </div>
                </div>
            </div>
        </div>

          

        <div class="row justify-content-center" style="margin-top:10px"> 

          <div class="col-sm-1 col-lg-1">
          </div>
          
          <div class="col-sm-8 col-lg-4">
            <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1690046/widgets/454609"></iframe>
          </div>


          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <div class="card card-stats col-sm-8 col-lg-8 text-center">
                <div class="card-body">
                      <div class="col-sm-8 col-lg-8">
                      <h5 class="card-title text-uppercase text-muted mb-0" style="margin-top:10px">Manual Control: </h5>
                      <br>
                      <form action="{{ route('manualLight.storedata') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-success" name="Manual" value="Manual">
                      </form>
                </div>
                </div>
            </div>
            <div class="card card-stats col-sm-8 col-lg-8 text-center">
              <div class="card-body">
                <div class="col-sm-8 col-lg-8">
                  <h5 class="card-title text-uppercase text-muted mb-0" style="margin-top:10px">Automatic Control: </h5>
                  <br>
                  <form action="{{ route('automationLight.storedata') }}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-danger" name="Automatic" value="Automatic">
                  </form>
                </div>
              </div>
          </div> 
             
        </div>
      </div>
    </div>


        

        @if($fieldLightFlag == 1)
        
        <div class="row justify-content-center" style="margin-top:10px"> 

          <div class="col-sm-1 col-lg-1">
          </div>
          
          <div class="col-sm-8 col-lg-4">
            <iframe width="450" height="260" style="border: 0px solid #cccccc;" src="https://thingspeak.com/channels/1690049/widgets/454610"></iframe>
          </div>


          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <div class="card card-stats col-sm-8 col-lg-8 text-center">
                <div class="card-body">
                      <div class="col-sm-8 col-lg-8">
                      <h5 class="card-title text-uppercase text-muted mb-0" style="margin-top:10px">Manual ON: </h5>
                      <br>
                      <form action="{{ route('onManualLight.storedata') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-success" name="Manual ON" value="Manual ON">
                      </form>
                </div>
                </div>
            </div>
            <div class="card card-stats col-sm-8 col-lg-8 text-center">
              <div class="card-body">
                <div class="col-sm-8 col-lg-8">
                  <h5 class="card-title text-uppercase text-muted mb-0" style="margin-top:10px">Manual OFF: </h5>
                  <br>
                  <form action="{{ route('offManualLight.storedata') }}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-danger" name="Manual OFF" value="Manual OFF">
                  </form>
                </div>
              </div>
          </div> 
             
        </div>

        @endif
      </div>
    </div>
  </div>
</div>
@endsection
