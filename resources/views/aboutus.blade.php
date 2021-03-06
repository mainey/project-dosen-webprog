@extends('layout')

@section('title', 'AboutUs')

@section('content')

<div class="container">
  <div class="bg-light">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4">Darma Real Estate
             </h1>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec rhoncus commodo tortor ac facilisis. Suspendisse venenatis eros velit,
                                sollicitudin porttitor metus porta non. Vivamus pellentesque enim vitae justo
                                porta, eu semper justo finibus
          
          </p>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="{{asset("storage/DRE_bg.png")}}" alt="" class="img-fluid rounded"></div>
      </div>
    </div>
  </div>
  
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Our Properties</h2>
          <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="/properties" class="btn btn-light px-5 rounded-pill shadow-sm">View Listings</a>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2 "><img src="{{asset("storage/81daa9a8-6a49-4d64-994b-840247fb301b.png")}}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="{{asset("storage/81daa9a8-6a49-4d64-994b-840247fb301b.png")}}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Contact Us</h2>
          <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="//www.twitter.com/" class="btn btn-light px-5 rounded-pill shadow-sm">Our Socials</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-light py-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 class="display-4 font-weight-light">Our team</h2>
          <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
  
      <div class="row text-center">
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{asset("storage/20171226_113840 (2).jpg")}}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Mulia Darma</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Gregorius Garth</h5><span class="small text-uppercase text-muted">COO - Co-Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Shane Wibowo</h5><span class="small text-uppercase text-muted">CMO</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- End-->
  
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Jonathan Aaron</h5><span class="small text-uppercase text-muted">Mandor</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div> 
    
     {{-- <h1 class="row justify-content-center mt-3">About Us</h1> --}}


    {{-- <h3 class="row justify-content-center mt-3">Darma Real Estate</h3> 

   <div class="row justify-content-center">
      <div class="col-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec rhoncus commodo tortor ac facilisis. Suspendisse venenatis eros velit,
                                sollicitudin porttitor metus porta non. Vivamus pellentesque enim vitae justo
                                porta, eu semper justo finibus
      </div>
      <div class="col-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Donec rhoncus commodo tortor ac facilisis. Suspendisse venenatis eros velit,
                                sollicitudin porttitor metus porta non. Vivamus pellentesque enim vitae justo
                                porta, eu semper justo finibus
      </div>
    </div>  --}}
    
    </div>
  </div>
@endsection
