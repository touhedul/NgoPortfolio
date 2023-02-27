@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<!-- Experience -->
<section  class="experience-area_bottom">
    <div class="container ">
       <div class="border-title text-center">
          <h3>SERVICES</h3>
        </div>   
       <div class="row">
          @foreach ($programs as $program)
          <div class="col-md-4">
             <div class=" card border-secondary ">
                <div id="theArt">
                   <div class="artGroup slide">
                      <div class="artwork"> 
                            <img src="{{asset('program_images/'.$program->image)}}">
                         <div class="detail shadow p-3  text-light">
                            <h3>{{ $program->title }}</h3>
                            {!! Str::limit($program->details, 300) !!}
                         </div>
                      </div>
                   </div>
                </div>
                <h6 class="card-text text-center pt-2">{{ $program->title }}</h6>
             </div>
          </div>
          @endforeach
       </div>
       {{-- <div class="my-5 py-5">
          <h5 class="text-center text-danger">When click on any category of these will be open a new page. And every inside page layout will be same as about us.
          </h5>
       </div> --}}
    </div>
    </section>
    <!-- Experience -->
@endsection
