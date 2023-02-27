@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')

<section class="hero-area section section-mg">
    <div class="hero-slider">
       <div class="hero-bg">
          <video class="vedio" autoplay loop muted playsinline
             src="https://www.11-76.com/html5-videos-21/foodex/foodex.mp4">
          <!-- <iframe width="1280" height="720" src="https://www.youtube.com/embed/e2KE4U1S8Ec" title="12 - Deploy VueJS Application  - Deployapps.io Tutorial Series" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
       </div>
       @foreach ($sliders as $slider)
       <div class="hero-bg hero-bg-2" style="background: url('{{asset('gallery_images/big-'.$slider->image)}}') no-repeat center;">

       </div>
       @endforeach
    </div>

 </section>
 <!-- <section class="banner" >
    <div class="banner-img">
       <img class="" style="width: 100%;" src="frontend/assets/images/banner.png" alt="">
       <img class="" style="width: 100%;" src="frontend/assets/images/banner.png" alt="">
       <img class="" style="width: 100%;" src="frontend/assets/images/banner.png" alt="">
    </div>
 </section> -->
 <!-- banner end -->
 <!-- Experience -->
 <section class="experience-area">
    <div class="container">
       <div class="experience-item">
          <div class="row">
             <div class="col-md-4">
                <div class="item bg-secondary text-center py-2">
                   <h4 class="">15 Years</h4>
                   <p class="">Work Experience</p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="item bg-secondary text-center py-2">
                   <h4 class="">35+</h4>
                   <p class="">Financial Bank</p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="item bg-secondary text-center py-2">
                   <h4 class="">48273</h4>
                   <p class="">Project Done</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section  class="experience-area_bottom">
 <div class="container ">
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

 </div>
 </section>
 <!-- Experience -->
 <!-- We are now at -->
 <section class="">
    <div class="container">
       <div class="bg-secondary title-bg w-100 my-5">
          <h3 class="bg-warning w-25 py-3 px-5 title">We are now at</h3>
       </div>
       <div class="devision-item">
          <div class="row">
            @foreach ($branches as $key => $branch)
               @if($key > 0)
               <div class="col-md-3">
                  <div class="item bg-secondary text-center py-3">
                     <h3 class="">{{ $branch->title }}</h3>                    
                  </div>
               </div>
               @endif
            @endforeach
          </div>
       </div>
    </div>
 </section>
 <!-- We are now at -->
 <!-- Digital Survey -->
 <section class="digital_survey mt-5">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <div class="">

          
                <div class="card border-secondary mb-3 h-100">

                   <div class="card-slider">
                    @foreach ($events as $event)
                    <div class="card-body text-secondary d-flex">
                        <div class="card-item-1">
                           <h4>{{ $event->title }}</h4>
                              <p>{!! $event->details !!}</p>
                        </div>
                        <div class="card-item-2 ">
                           <div class="img">
                              <img class="w-100 h-100" src="{{asset('program_images/'.$event->image)}}" alt="">
                           </div>
                        </div>
                     </div>
                    @endforeach
                   </div>
                   <div class="bg-secondary w-100">
                    <h3 class="bg-warning w-25 px-4 py-2">Event</h3>
                   </div>
                 </div>
            
             </div>
          </div>
          <div class="col-md-6">
             <div class="">

                <div class="card border-secondary mb-3 h-100">
                   <div class="card-slider">
                    @foreach ($newses as $news)
                    <div class="card-body text-secondary d-flex">
                        <div class="card-item-1">
                           <h4>{{ $news->title }}</h4>
                              <p>{!! $news->details !!}</p>
                        </div>
                        <div class="card-item-2 ">
                           <div class="img">
                              <img class="w-100 h-100" src="{{asset('program_images/'.$news->image)}}" alt="">
                           </div>
                   
                        </div>
                     </div>
                    @endforeach
                   
                </div>
                   <div class="bg-secondary w-100">
                    <h3 class="bg-warning w-25 px-4 py-2">News</h3>
                   </div>
                 </div>
     
             </div>
          </div>
 
       </div>
    </div>
 </section>
 <!-- Digital Survey -->
 <!--  -->
 <section class="digital_survey  news_area">
    <div class="container">
       <div class="row">
          <div class="col-md-6 mb-3 ">
             <div class="card border-secondary mb-4 h-100">
                
                <div class="card-body text-secondary d-flex">
                   <ul>
                    @foreach ($newses as $news)
                    <li><a>{{ $news->title }}</a></li>
                    @endforeach
             
                   </ul>
                </div>
                <div class="bg-secondary w-100">
                   <h3 class="bg-warning w-50 px-4 py-2 ">News</h3>
                   </div>
                </div>
          </div>
          <div class="col-md-6 mb-3 ">
             <div class="card border-secondary mb-4 h-100 build_career">                      
                <div class="card-body text-secondary ">
                   <h4 class="mb-3 ">Build career With EIS</h4>                          
                   <ul >
                    
                   <li class="ms-2">  <img style="width: 55px;" src="{{asset('frontend/assets/images/pdf.png')}}" alt=""> Lorem, ipsum dolor.</li>
                   </ul>                   
                </div>
                <div class="bg-secondary w-100">
                   <h3 class="bg-warning w-50 px-4 py-2 ">Circular / Career
                   </h3>
                   </div>
                </div>
          </div>
       </div>
    </div>
 </section>
 <!--  -->
 <!-- bank area -->
 <section class="bank-area mb-5">
    <div class="container">
       <h2 class="text-center mb-3">Our Clients List</h2>
       <div class="bg-secondary bank-area-slider py-3 bank_logo">
         @foreach ($resources as $resourc)
            <div class="bank_logo_item">
               <div class="img"><img src="{{asset('program_images/'.$resourc->image)}}" alt=""></div>
            </div> 
         @endforeach

       </div>
    </div>
 </section>
 <!-- bank area -->
 <!--  -->
 <section class="superentendency">
    <div class="container">
       <div class="bg-secondary title-bg  w-100 my-5">
          <h3 class="bg-warning w-25 py-3 px-5 title">Superentendency-</h3>
       </div>
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
 <!--  -->
 <!--  -->
 <section class="send_a_messege">
    <div class="container">
       <div class="bg-secondary title-bg  w-100 my-5">
          <h3 class="bg-warning w-25 py-3 px-5 title">Superentendency-</h3>
       </div>
       <div class="bg-secondary px-3 pt-5 pb-3">
          <form class="d-flex justify-content-between send_a_messege_item"  method="POST" action="{{route('submit.feedback')}}">
            @csrf
             <div class="  input_item">
                <div class="input d-flex mb-3">
                   <label for="" class="w-25">Name</label>
                   @guest
                  <input data-parsley-trigger="change" value="{{old('name')}}" required type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                  @else
                  <input data-parsley-trigger="change" required type="text" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                  @endguest
                </div>
                <div class="input d-flex mb-3">
                   <label for="" class="w-25">Contact No.</label>
                   <input data-parsley-trigger="change" required value="{{old('phone')}}" required type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Enter phone">
                </div>
                <div class="input d-flex mb-3">
                   <label for="" class="w-25">E-mail</label>
                   @guest
                  <input data-parsley-trigger="change" value="{{old('email')}}" required type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                  @else
                  <input data-parsley-trigger="change" required type="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email}}" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                  @endguest
                </div>
                <div class="checkbox">
                   <h4 class="mb-4">Type of Inquiry:</h4>
                   <div class="d-flex flex-wrap">
                      <div class="checkbox-item">
                         <input type="checkbox" id="Valuation" name="Valuation" value="Valuation">
                         <label for="Valuation"> Valuation & Survey</label>
                      </div>
                      <div class="checkbox-item">
                         <input type="checkbox" id="Digital" name="Digital" value="Digital">
                         <label for="Digital"> Digital Survey</label>
                      </div>
                      <div class="checkbox-item">
                         <input type="checkbox" id="Civil" name="Civil" value="Civil">
                         <label for="Civil"> Civil</label>
                      </div>
                      <div class="checkbox-item">
                         <input type="checkbox" id="Engineering" name="Engineering" value="Engineering">
                         <label for="Engineering"> Engineering</label>
                      </div>
                      <div class="checkbox-item">
                         <input type="checkbox" id="General" name="General" value="General">
                         <label for="General">General</label>
                      </div>
                   </div>
                </div>
             </div>
             <div class=" input_item textarea">
                <label for="" class="d-block mb-2">Messege:</label>
                {{-- <textarea  name="" id="" cols="30" rows="7" class="form-control "></textarea> --}}
                <textarea name="message" required class="form-control" rows="7" cols="30">{{old('message')}}</textarea>
             <div class="col-12 text-right">
                <button class="btn btn-warning mt-3">Submit:</button>
             </div>
             </div>
          </form>
       </div>

    </div>
 </section>
 <!--  -->
 <!--  -->
 <section class="welcome_head_office mb-5">
    <div class="container">
       <div class="bg-secondary title-bg  w-100 my-3">
          <div class="bg-secondary  w-100  mt-5 mb-3">
          <h3 class="bg-warning w-25 py-3 px-5 title">Welcome Head Office</h3>
       </div>
    </div>
       <div class="d-flex welcome_head_office_item">
          <div class="bg-secondary align-items-center justify-content-center d-flex w-25 left-item">
             <div class="content bg-white px-3 py-4 m-3">
                <h4 class="mb-3">Head Office :</h4>
                <p class="mb-3">{{setting('office_address')}}
                   </p>
                   <div class="">
                      <div class="contact d-flex mb-2">
                         <div class="icon me-2"><i class="fa fa-phone" aria-hidden="true"></i></div>
                   <div class="contact-info">
                      <span>{{setting('office_phone')}}</span>
                   </div>
                      </div>
                      {{-- <div class="contact d-flex mb-2">
                         <div class="icon me-2"><i class="fab fa-facebook-square"></i></div>
                   <div class="contact-info">
                      <span>+880 1310 7777777 </span>
                   </div>
                      </div> --}}
                      <div class="contact d-flex mb-2">
                         <div class="icon me-2"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                   <div class="contact-info">
                      <a href="mailto:{{ setting('office_email') }}">{{setting('office_email')}}</a>
                   </div>
                      </div>

                   </div>
             </div>
          </div>
          <div class="map w-75">
             <iframe class="w-100 h-100" src="{{ setting('office_map') }}" width="600" height="450" style="border:0;filter: invert(100%)" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             <!-- <iframe class="w-100 h-100"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246783.4114385055!2d-74.1197636697327!3d40.69766374854729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e1!3m2!1sen!2sbd!4v1670348036670!5m2!1sen!2sbd" width="600" height="450" style="border:0; filter: invert(100%)" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
          </div>

       </div>
   
 </section>
 <!--  -->
 <!--  -->
@endsection
