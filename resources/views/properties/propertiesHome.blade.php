@extends('layout')

@section('title', 'Properties')

@section('content')

<div class="col-md-10 mx-auto" id="content">
    <div class="container">
        <div class="container mb-5">
            <div class="d-flex flex-row justify-content-between">
                <div class="d-flex flex-column">
                    <h1 class="overline" style="margin-top: 30px; font-weight: bold;">Our Properties</h1>
                    <span class="text-muted">Check it out!</span>
                </div>
                <a href="" class="d-flex btn btn-success normal-button-in-flex">
                    Add Property
                </a>
            </div>
            <div class="row">
                @foreach ($property as $p)
                    <div class="col-md-4 mt-5 text-white">
                        <div class="card-box-a card-shadow">
                        <a href="/propertiesdetail/{{$p->id}}">
                            <div class="img-box-a">
                                <img src="{{Illuminate\Support\Facades\Storage::url($p->image)}}" alt="" class="img-a img-fluid rounded-top">
                            </div>
                        </a>
                        <div class="card-overlay rounded-bottom" style="background-color: #68BBE3">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <div class="card-title-a p-2">
                                    <h2><p>{{$p->name}}</p></h2>
                                        <p>{{$p->location}}</p>
                                    </div>
                                </div>

                                <div class="card-body-a p-2">
                                    <div class="price-box d-flex">
                                        <span class="price-a">Rent | Rp. {{$p->price}}</span>
                                    </div>
                                    <a href="/propertiesdetail/{{$p->id}}" class="link-a">Click here to view
                                    <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
        </div>
        {{ $property->links()}}
</div>

@endsection
