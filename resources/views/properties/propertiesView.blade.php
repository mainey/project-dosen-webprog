@extends('layout')

@section('title', 'Properties')

@section('content')

    <div class="col-md-10 mx-auto" id="content">
        <div class="d-flex justify-content-start">
            <a href="" class="d-flex" style="margin-right: 4rem;">
                <img class="card-img-top" src="{{ Illuminate\Support\Facades\Storage::url($property->image) }}" alt='...'
                    style="max-height: 500px; max-width: 600px; margin-top: 20px;">
            </a>
            <div class="flex-column" style="align-self: center;">
                <div class="property-header">
                    <h1 class="property-view-title">{{ $property->name }}</h1>
                    <span class="text-muted">{{ $property->location }}</span>
                </div>
                <div class="property-price mt-3">
                    <h4 class="fw-bold">Price: Rp. {{ $property->price }} / Month</h4>
                </div>
                @if (auth()->user() != null)
                    <div class="property-buttons" style="margin-top: 1rem;">
                        {{-- TODO: Kasih guard buat admin / user / guest --}}
                        <a href="/properties/rent/{{ $property->id }}" class="btn btn-secondary">Rent This Property</a>
                        @if (auth()->user()->role == 'admin')
                            <a href="/properties/update/{{ $property->id }}" class="btn text-light btn-success">Update</a>
                            <form action="/properties/delete/{{ $property->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn text-light btn-danger">Delete</button>
                            </form>
                        @endif
                    </div>
                @endif
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
                                    <span>{{ $property->type }}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <h5>Area:</h5>
                                    <span>{{ $property->area }} m2</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <h5>Bedrooms:</h5>
                                    <span>{{ $property->bed }}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <h5>Bathrooms:</h5>
                                    <span>{{ $property->bathroom }}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <h5>Garage:</h5>
                                    <span>{{ $property->garage }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="property-view-title underline" style="">
                                    Property Summary
                                </h2>
                                <div class="property-summary">
                                    {{ $property->description }}
                                </div>
                                <br><br><br>
                                <h2 class="property-view-title underline" style="">
                                    Amenities
                                </h2>
                                <div class="property-summary">
                                    {{ $property->amenities }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
