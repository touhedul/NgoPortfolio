@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section class="about_iesl mt-3 mb-5">
    <div class="container">
   <div class="border-title text-center">
     <h3>{{ $service->title }}</h3>
   </div>   
      <div class="row align-items-center">
        <div class="col-lg-7">
           <p class="mb-2">{!! $service->details !!}</p>

        </div>
        <div class="col-lg-5">
           <div class="card p-4">
              <!-- <div class="img"> -->
                 <img class="w-100" src="{{asset('program_images/'.$service->image)}}" alt="">
              <!-- </div> -->
           </div>
        </div>
      </div>
    <div class="">
     <h6>Note</h6>
     <p class="mb-2">
        Our service always available</p>
    </div>
   </div>
</section>
@endsection
