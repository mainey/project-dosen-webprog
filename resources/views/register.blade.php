@extends('layout')

@section('title', 'Register')

@section('content')

        <div class="row mt-5 justify-content-center">

          <form class="col-7">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Register</p>
            </div>

            <div class="form-outline mb-2 pt-3">
                <label class="form-label" for="name">Full Name</label>
              <input type="text" id="name" class="form-control form-control-lg"
                placeholder="Enter your full name here" />
              
            </div>
  
            
            <div class="form-outline mb-2 pt-3">
                <label class="form-label" for="email">Email</label>
              <input type="email" id="email" class="form-control form-control-lg"
                placeholder="Enter a valid email" />
            </div>

            <div class="form-outline mb-2 pt-3">
                <label class="form-label" for="password">Password</label>
              <input type="password" id="password" class="form-control form-control-lg"
                placeholder="Enter password" />
            </div>

            <div class="form-outline mb-2 pt-3">
                <label class="form-label" for="address">Address</label>
              <input type="text" id="address" class="form-control form-control-lg"
                placeholder="Enter your address" />
              
            </div>

            <div class="form-outline mb-2 pt-3">
                <label class="form-label" for="phone">Phone</label>
              <input type="text" id="phone" class="form-control form-control-lg"
                placeholder="Enter a phone number" />
              
            </div>
          </form>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-1">
                <div class="text-center text-lg-start mt-4 pt-2">
                 <button type="button" class="button-login"
                 style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            </div>
        </div>
    
    </div>
    </div>

  </section>

@endsection
