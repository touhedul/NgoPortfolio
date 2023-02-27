<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>IES</title>
      <!--fonts-links  -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap"
         rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;500;600;700;800;900&display=swap"
         rel="stylesheet">
      <!--fonts-links  -->
      <!-- css -->
      <link rel="stylesheet" href="{{asset('frontend/assets/plugins/fonts/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/plugins/bootstrap/bootstrap.min.css')}}">
      <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

      <link rel="stylesheet" href="{{asset('frontend/assets/plugins/slick/slick.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css') }}">
      <!-- css -->
   </head>
   <body >
      <!-- header start-->
      <header>
         <div class="header_top">
            <div class="container">
               <div class="d-flex align-items-center justify-content-between">
                  <div class="icons d-flex">
                     <a href=" {{setting('facebook')}}"><i class="fab fa-facebook-square"></i></a>
                  </div>
                  <div class="language d-flex">
                     <ul class="d-flex left">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                     </ul>
                     <ul class="d-flex">
                        <li><a href="#">Career</a></li>
                        <li><a href="#">FAQ</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bottom">
            <div class="container">

               <div class="d-flex justify-content-between main">
                  <div class="header_bottom_item first-item">
                     <div class="logo d-flex">
                        <div class="img">
                           <img class="img-fluid" src="{{asset('frontend/assets/images/logo.png')}}" alt="">
                        </div>
                        <div class="text">
                           <h1>Inspection</h1>
                           <h3>Engineering & Survey (IES) Limited</h3>
                        </div>
                     </div>
                  </div>
                  <div class="header_bottom_item meddel-item">
                     <div class="d-flex">
                        <address class="address d-flex align-items-center">
                           <div class="img">
                              <a href="https://www.google.com/maps/place/Tongi/@23.9067212,90.3572587,13z/data=!3m1!4b1!4m5!3m4!1s0x3755c4488706e2d9:0xee45004fa6ba8d03!8m2!3d23.9010422!4d90.4088116"><img src="{{asset('frontend/assets/images/location_icon.png')}}" alt="map"></a>
                              
                           </div>
                           <p>Head Office Located <br> {{setting('office_address')}}</p>
                        </address>
                        <div class="address d-flex align-items-center mb-3">
                           <div class="img">
                              <a href="mailto:info@ieslimitedbd@gmail.com">
                                 <img src="{{asset('frontend/assets/images/message_icon.png')}}" alt="">
                              </a>
                           </div>
                           <a href="mailto:info@ieslimitedbd@gmail.com">Send us a Message<br>{{setting('office_email')}}</a>
                        </div>
                     </div>
                  </div>
                  <div class="header_bottom_item last-item">
                     <div class="bg-secondary text-white py-2 px-3 ps-5">
                        <h6 class="ps-3 text-uppercase">Call us Now</h6>
                        <h5 class="ps-3">{{setting('office_phone')}}</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="navigation">
            <nav class="navbar navbar-expand-lg menu-fixd">
               <div class="container ">
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars" aria-hidden="true"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarText">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-secondary  px-2 mr-4">
                     <li class="nav-item">
                       <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{route('index')}}">Home</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="{{route('about')}}">ABOUT US</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link {{ (request()->is('teams')) ? 'active' : '' }}" href="{{ route('teams') }}">OUR TEAM </a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link {{ (request()->is('services') || request()->is('service/*')) ? 'active' : '' }}" href="{{ route('services') }}">SERVICES <i class="fas fa-chevron-down"></i>       
                     </a>
                     <ul class="sub-menu">
                           
                           @foreach ($servicesMenus as $menu)
                           <li><a href="{{ route('service.single', $menu->id)}}">{{ $menu->title }}</a></li>
                           @endforeach
                           
                        </ul>              
                     </li>   
                     <li class="nav-item">
                       <a class="nav-link {{ (request()->is('clients')) ? 'active' : '' }}" href="{{ route('clients') }}">CLIENT LIST</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link {{ (request()->is('projects')) ? 'active' : '' }}" href="{{ route('projects') }}">PROJECT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ (request()->is('galleries')) ? 'active' : '' }}" href="{{ route('galleries') }}">PHOTO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">CONTACT US</a>
                      </li>
                  
                   </ul>
                   
                   <span class="navbar-text ">
                     <h2 class="bg-warning  px-2">Get a Quote</h2>
                   </span>
                 </div>
               </div>
             </nav>
             
         </div>
      </header>
  
      <!-- header end-->
      <!-- banner start -->
      @yield('content')
      <footer class="text-white ">
         <div class="overlay px-5">
            <div class="row">
               <div class="col-md-4 mt-5 ">
                  <div class="left-item">
                     <div class="logo d-flex">
                        <div class="img">
                           <img class="w-100" src="{{asset('frontend/assets/images/logo-2.png')}}" alt="">
                        </div>
                        <div class="text mt-2">
                           <h1>Inspection</h1>
                           <h3>Engineering & Survey (IES) Limited</h3>
                        </div>
                     </div>
                     @foreach ($branches as $branch)
                        <h5>{{ $branch->short_details }}</h5>
                        <p>{!! $branch->details !!}
                        </p>
                     @endforeach
                     
                     {{-- <h5>Chittagong Office:</h5>
                     <p>1556, East Nasirabad, Sananda R/A, 2nd Floor, Panchlaish, Chattogram.
                     </p>
                     <h5>Sylhet Office :</h5>
                     <p>Noor Mansion, Daudnagar Bazar, Shayestaganj, Hobiganj. 
                     </p>
                     <h5>Khulna Office :</h5>
                     <p>15, Moulovipara Mosjid Lane, Khulna Sadar, Khulna.
                        <h5>Gazipur Office :</h5>
                        <p>221, Anonda Bazar, Kapatiapara, Mawna, Sreepur, Gazipur. 
                        </p> --}}
                 
   
                  </div>
               </div>
               <div class="col-md-4  order-1 order-sm-0">
          
                  <div class="center_item ">
                     <div class="follow">
                        <h3 class="text-center mb-4">Follow us -</h3>
                        <div class="icons d-flex">
                           <a href=" {{setting('facebook')}}"><i class="fab fa-facebook-square"></i></a>
                           
                              </div>
   
                     </div>
                     <div class="text-center mt-3">
                        <p class="text-white">Sister Concern : </p>
                        <h5>IES Agro Park</h5>
                        <p class="text-white">221, Anonda Bazar, Kapatiapara, Mawna, Sreepur, Gazipur. 
                        </p>
                     </div>
                     <div class="btm-area">
                        <ul>
                           <li>Career </li>
                           <li>FAQ</li>
                        </ul>
                        <p class="text-white">Copyright ©2022 Eastern Bank Ltd. All Rights Reserved</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-5 order-0 order-sm-1">
                  <div class="right-item">
                     <h3 class="mb-4">Office Hours</h3>
                     <h6 class="mb-3">Visit one of our locations today and get started on
                        your next project</h6>
                        <table>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                           <tr>
                              <td class="ps-0">Saturday</td>
                              <td>9:00 am > 05:00 pm
                              </td>
                           </tr>
                       
                        </table>
                  </div>
               </div>
   
            </div>
         </div>
  
      </footer>
      <!--  -->
      <!-- script -->
      <script src="{{asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script>
      <script src="{{asset('frontend/assets/plugins/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>

      <script src="{{asset('frontend/assets/plugins/slick/slick.min.js')}}"></script>
      <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
      <script src="{{asset('frontend/assets/js/script.js')}}"></script>
      <!-- script -->
   </body>
</html>
