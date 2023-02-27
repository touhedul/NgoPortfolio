@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section  class="our_client">
    <div class="container ">
       <div class="text-center">
          <h3>OUR CLIENTS</h3>
        </div>  
        <div class="row my-5">
            @foreach ($resources as $resourc)   
                <div class="col-md-3">
                    <div class="img">
                    <img src="{{asset('program_images/'.$resourc->image)}}" alt="">
                    </div>
                </div>             
            @endforeach
        </div> 
    </div>
    </section>
@endsection
