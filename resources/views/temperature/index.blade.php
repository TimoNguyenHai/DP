@extends('layouts.app-coreui')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <title>Laravel</title>

          <div class="col-sm-3 col-lg-3">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1560931/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=20&title=Soil+Moisture+Percent+Right&type=line"></iframe>
          </div>
            
          <div class="col-sm-3 col-lg-3">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1680507/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=20&title=Pump+Manual+Flag&type=step"></iframe>
          </div>
          
          <div class="col-sm-6 col-lg-3">
            <form action="https://api.thingspeak.com/update?api_key=5XFU4BAC99BK9VIX&field1=1" method="post">
              @csrf
              <input type="submit" class="btn btn-success" name="Manual" value="Manual">
            </form>
          </div>
          
          
          <div class="col-sm-17 col-lg-3">
            <form action="https://api.thingspeak.com/update?api_key=5XFU4BAC99BK9VIX&field1=0" method="post">
              @csrf
              <input type="submit" class="btn btn-danger" name="Automatic" value="Automatic">
            </form>
          </div>


          <div class="col-sm-3 col-lg-3">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1681543/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&title=Pump+State+-+Project&type=step"></iframe>
          </div>
    
            <div class="col-sm-17 col-lg-3">
              <form action="https://api.thingspeak.com/update?api_key=RP3BQ4J34MP51A37&field1=1" method="post">
                @csrf
                <input type="submit" class="btn btn-success" name="ON" value="ON">
              </form>
            </div>
    
    
            <div class="col-sm-6 col-lg-3">
              <form action="https://api.thingspeak.com/update?api_key=RP3BQ4J34MP51A37&field1=0" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" name="OFF" value="OFF">
              </form>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
