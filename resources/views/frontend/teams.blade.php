@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section class="superentendency">
    <div class="container">
      
       <div class="row">
         @foreach ($teams as $team)
         <div class="col-md-6 mb-4">
            <div class="card border-secondary h-100">
         
               <div class="card-body text-secondary d-flex justify-content-between align-items-center">
                  <div class="text">
                     <h4 class="mb-3 ">{{ $team->name }}</h4>   
                     <p>{{ $team->designation }}<br>
                        {!! $team->about !!}
                     </p>
                  </div>
               <div class="img">
                  <img class="w-100" src="{{asset('team_images/'.$team->image)}}" alt="">
               </div>                   
               </div>
         
            </div>
         </div>
         @endforeach
          <div class="col-md-6 mb-4"></div>
       </div>

    </div>
 </section>
@endsection
