@extends('layout')

@section('title', 'AboutUs')

@section('content')
<div class="container mt-5">
    
    

    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset("storage/icon-user-default.png")}}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><th>{{ auth()->user()->name }}</th></h4>
                      <p class="text-secondary mb-1">DRE Member</p>
                      <p class="text-muted font-size-sm"><th>{{ auth()->user()->address }}</th></p>
          
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <tr>
                            
                            <th>{{ auth()->user()->name }}</th>
                        </tr>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <th>{{ auth()->user()->email }}</th>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <th>{{ auth()->user()->phone }}</th>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <th>{{ auth()->user()->address }}</th>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>

        </div>
    




@endsection
