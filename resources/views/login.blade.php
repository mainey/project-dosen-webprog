@extends('layout')

@section('title', 'Login')

@section('content')

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://static.vecteezy.com/system/resources/previews/000/568/450/original/home-icon-vector.jpg" class="img-fluid"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form>
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Login</p>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4 pt-3">
                <label class="form-label" for="emailForm">Email address</label>
              <input type="email" id="emailForm" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3 pt-3">
                <label class="form-label" for="formPassword">Password</label>
              <input type="password" id="formPassword" class="form-control form-control-lg"
                placeholder="Enter password" />
              
            </div>
  
            
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" class="button-login"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                  class="link-danger">Register</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>

  </section>

@endsection
