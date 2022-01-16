@extends('layout')

@section('title', 'Properties')

@section('content')

<div class="col-md-10 mx-auto" id="content">
    <div class="d-flex justify-content-start">
        <a href="" class="d-flex" style="margin-right: 4rem;">
            <img class="card-img-top" src="{{ asset('storage/building-placeholder.jpg')}}" alt=''
            style="max-height: 500px; max-width: 600px; margin-top: 20px;">
        </a>
        <div class="flex-column" style="align-self: center;">
            <div class="property-header">
                <h1 class="property-view-title">Property Name</h1>
                <span class="text-muted">Street Placeholder</span>
            </div>
            <div class="property-price mt-3">
                <h4 class="fw-bold">Price: Rp. 12 M / Month</h4>
            </div>
            <div class="property-buttons" style="margin-top: 1rem;">
                {{-- TODO: Kasih guard buat admin / user / guest --}}
                <a href="#" class="btn btn-secondary" >Rent This Property</a>
                <a href="#" class="btn text-light btn-success">Update</a>
                <a href="#" class="btn text-light btn-danger">Delete</a>
            </div>
        </div>
    </div>

    <div class="row d-flex">
        <div class="col-sm-12">
            <div class="row justify-content-between">
                <div class="col-md-5 col-lg-3 mt-1">
                    <h2 class="property-view-title underline" style="">
                        Property Details
                    </h2>
                    <div class="property-details mt-4">
                        <ul>
                            <li class="d-flex justify-content-between">
                                <h5>Type:</h5>
                                <span>House</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <h5>Area:</h5>
                                <span>265 m2</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <h5>Bedrooms:</h5>
                                <span>2</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <h5>Bathrooms:</h5>
                                <span>2</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <h5>Garage:</h5>
                                <span>1</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="property-view-title underline" style="">
                                Property Details
                            </h2>
                            <div class="property-summary">
                                Lorem Ipsum
                            </div>
                            <br><br><br>
                            <h2 class="property-view-title underline" style="">
                                Amenities
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
