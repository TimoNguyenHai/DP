@extends('layouts.app-coreui')

@section('content')
<div class="container">
  
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <title>Laravel</title>

          <div class="col-sm-3 col-lg-3">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1686802/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=step"></iframe>
          </div>

          <div class="col-sm-3 col-lg-3">
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1686803/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=step"></iframe>
          </div>           
          
            <div class="col-sm-17 col-lg-3">
              <form action="https://api.thingspeak.com/update?api_key=1UP2RLC93511FJ6G&field1=1" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" name="Manual" value="Manual">
              </form>
            </div>
    
            <div class="col-sm-6 col-lg-3">
              <form action="https://api.thingspeak.com/update?api_key=1UP2RLC93511FJ6G&field1=0" method="post">
                @csrf
                <input type="submit" class="btn btn-success" name="Automatic" value="Automatic">
              </form>
            </div>

            <div class="col-sm-3 col-lg-3">
              <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1686806/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=step"></iframe>
            </div>     
                      
            <div class="col-sm-17 col-lg-3">
              <form action="https://api.thingspeak.com/update?api_key=WRO5AVKL9MNJ3OJO&field1=1" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" name="ON" value="ON">
              </form>
            </div>
    
            <div class="col-sm-6 col-lg-3">
              <form action="https://api.thingspeak.com/update?api_key=WRO5AVKL9MNJ3OJO&field1=0" method="post">
                @csrf
                <input type="submit" class="btn btn-success" name="OFF" value="OFF">
              </form>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
