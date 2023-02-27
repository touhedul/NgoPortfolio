@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section class="about_iesl mt-3 mb-5">
    <div class="container">
   <div class="border-title text-center">
     <h3>About IESL</h3>
   </div>   
      <div class="row align-items-center">
        <div class="col-lg-7">
           <p class="mb-2">Inspection, Engineering & Survey (IES) Limited is a highly reputed trustworthy Survey company in Bangladesh, who provides
              multi services of land, building machinery assessment including DIGITAL SURVEY. IES was formed in 2009 and with the
              passage of time, has earned the rating as a first class trustworthy company in the field of Survey & Valuation in Bangladesh
              through its high skills, dependable activities, dedications, sincere activities and honesty. IES Limited is always appreciated by
              its honorable clients for their smooth services. IES is now providing services for the 19 highest reputed
              Banks and 7 financial organization in Bangladesh. </p>
              <p class="mb-2">IES Limited was founded by honorable Mr. Delower Hossain who is very famous in Survey & Valuation Sector in Bangladesh
                 for his mastery knowledge and practical skills. He is giving direction as a Managing Director in IES Limited. A group of talented,
                hardworking, skillful teams are exerting their professional talent in IES Limited. IES limited assigns responsibility to high skilled
                and well trained employees all over Bangladesh.</p>
                <p class="mb-2">Head Office of the company is situated at Motijheel C/A in Dhaka. It has Chittagong Branch office at, Moddho Solimpur (Opposite
                 side of Foujdarhat Cadet College). It has also branch office at Khulna and Sylhet. Within a very short span of time, IES Limited will
                 set up new branches at Rajshahi, and Bogura to provide smooth services for honorable clients. </p>

        </div>
        <div class="col-lg-5">
           <div class="card p-4">
              <!-- <div class="img"> -->
                 <img class="w-100" src="{{asset('frontend/assets/images/card_img.png') }}" alt="">
              <!-- </div> -->
           </div>
        </div>
      </div>
    <div class="">
     <h6>Motto</h6>
     <p class="mb-2">
        With a view to secure the investment of honorable clients, IES Team collect required information from all probable & possible sources, make sure the authenticity of the information, focuses minimization of business risk and finally help making honorable
        client’s Business safe.</p>
    </div>
   </div>
</section>
 <!-- About IESL end-->
 <!-- Company Founder start -->
 <section class="company_founder mt-3 mb-5">
    <div class="container">
   <div class="border-title text-center">
     <h3>Company Founder</h3>
   </div>   
      <div class="row align-items-center">
        <div class="col-lg-7">
           <p class="mb-2">IES Limited founded by honorable Mr. Delower Hossain on 2009. He is an icon for his knowledge in the sector of Digital survey &
              valuation in Bangladesh. He is also one of the founder and vice president of Bangladesh Survey & Valuation Association (BSVA).
              He is also leading IES Limited as Managing Director. He has above 20 years experienced in this area </p>
              <p class="mb-2">He completed his graduation Msc in Geography and then Diploma in Survey & Valuation. He is providing his knowledge to improve
                 Survey & Valuation sector in Bangladesh. He often makes policy to secure investment of Banks or Financial organizations. He do
                 analyze to secure and safe investment of Banks or financial organizations. He does thesis on how to minimize the risk of investments
                 and assisting clients by providing authentic valuable information to take the right decision. He is the mastermind in the sector of Digital
                 Survey & Valuation in Bangladesh.</p>
    
        </div>
        <div class="col-lg-5">
           <div class="card p-4">
              <div class="img ">
                 <img class="w-100" src="{{asset('frontend/assets/images/superpntend_img.png') }}" alt="">
              </div>
                 <div class="content">
                    <h4>Md. Delower Hossain
                    </h4>
                    <h5 class="mb-3">Managing Director
                       Inspection Engineering &
                       Survey (IES) Limited</h5>
                    <h5>Vice President
                       Bangladesh Survey
                       Association Limited</h5>
                 </div>
              
           </div>
        </div>
      </div>
   </div>
</section>
 <!-- Company Founder end-->
 <!-- Company Profile start -->
 <section class="company_profile mt-3 mb-5 ">
    <div class="container">
   <div class="border-title text-center">
     <h3>Company Profile</h3>
   </div>   
    <div class=" ">
        <h5 class="text-center text-danger">Company Profile will be in 1 page opened & downloadable PDF file. it will be deliver later by Mr. hamim
        </h5>
    </div>

   </div>
</section>
 <!-- Company Profile end-->
@endsection
