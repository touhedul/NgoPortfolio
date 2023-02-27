@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section  class="experience-area_bottom">
    <div class="container ">
       <div class=" text-center">
          <h3>COMPLETED PROJECTS
          </h3>
        </div>   
       <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-4">
            <div class=" card border-secondary ">
               <div id="theArt">
                  <div class="artGroup slide">
                     <div class="artwork"> 
                           <img src="{{asset('program_images/'.$project->image)}}">
                        <div class="detail shadow p-3  text-light">
                           <h3>{{ $project->title }}</h3>
                           {{-- <ul>
                              <li>Land & Building Valuation</li>
                              <li>Land & Building Valuation</li>
                              <li>Land & Building Valuation</li>
                              <li>Land & Building Valuation</li>
                           </ul> --}}
                           <p>{!! Str::limit($project->details, 300) !!}</p>
                        </div>
                     </div>
                  </div>
               </div>
               <h6 class="card-text text-center pt-2">{{ $project->title }}</h6>
            </div>
         </div>
        @endforeach
          
       </div>

    </div>
    </section>
@endsection
