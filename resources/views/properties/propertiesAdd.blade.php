@extends('layout')

@section('title', 'Properties Update')

@section('content')

<form method="post" action="/properties/add" class="col-md-10 mx-auto" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="d-flex justify-content-center">
        <div class="flex-column">
            <div class="property-header">
                <h1 class="property-view-title">Add New Property</h1>
            </div>
            <div class="d-flex flex-column" style="max-width: 80%; margin: auto">
                <div class="p-1">
                    <h5>Name:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="...">
                    </div>
                </div>
                <div class="p-1">
                    <h5>Price:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="Rp. ...">
                    </div>
                </div>
                <div class="p-1">
                    <h5>Location:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="location" placeholder="...">
                    </div>
                </div>
                <div class="p-1 d-flex flex-row justify-content-between" style="width: 80%">
                    <div class="d-flex flex-column">
                        <h5>Type:</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="type" placeholder="...">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>Area (m2):</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="area" placeholder="...">
                        </div>
                    </div>
                </div>
                <div class="p-1 d-flex flex-row justify-content-between" style="width: 80%">
                    <div class="d-flex flex-column">
                        <h5>Bedrooms:</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="bed" placeholder="...">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>Bathrooms:</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="bathroom" placeholder="...">
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <h5>Garage:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="garage" placeholder="...">
                    </div>
                </div>
                <div class="p-1">
                    <h5>Description:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="description" placeholder="...">
                    </div>
                </div>
                <div class="p-1">
                    <h5>Amenities:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="amenities" placeholder="...">
                    </div>
                </div>
                <div class="p-1">
                    Image
                    <input type="file" name="image" class="form-control">
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <br>
                    <i>{{$error}}</i>
                    @endforeach
                @endif

                <div class="property-buttons justify-content-center" style="margin-top: 0.8rem;">
                    <button type="submit" class="btn text-light btn-success" style="">Add Property</button>
                    <a href="{{ back() }}" class="btn text-light btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
