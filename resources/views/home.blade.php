@extends('layouts.app-coreui')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-14">
      
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                <form action="https://api.thingspeak.com/update?api_key=RP3BQ4J34MP51A37&field1=0" method="post">
                  <input type="submit" class="btn btn-danger" name="upvote" value="Manual">
                </form>
              </div>

                <div>
                    <form action="https://api.thingspeak.com/update?api_key=RP3BQ4J34MP51A37&field1=0" method="post">
                    {{-- <input type="button" class="btn btn-success" name="upvote" value="Automatic"> --}}
                    {{-- <a class="theme-color btn btn-success" href="{{route('home')}}">Automatic</a> --}}
                    <a class="theme-color btn btn-success" href="{{route('home')}}">Automatic</a>
                    </form>
                </div> 
                
                <div class="col-sm-4 col-lg-3">
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1680507/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Soil+Moisture+%5B%25%5D&type=line"></iframe>
                </div>
            </div>

            <div class="row">

            </div> 
            <div class="col-sm-10 col-lg-5">
                <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1681543/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=10&type=line&update=15"></iframe>
            </div>
        </div>
        
     
    </div>     
</div>
@endsection
