@extends('layout')

@section('title', 'Properties Update')

@section('content')

<form method="post" action="{{ route('updatePropertyDesc', $property) }}" class="col-md-10 mx-auto" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('patch') }}

    <div class="d-flex justify-content-center">
        <div class="flex-column">
            <div class="property-header">
                <h1 class="property-view-title">Update Property for "{{ $property->name }}"</h1>
                <h1 class="property-view-title"></h1>
            </div>
            <div class="d-flex flex-column" style="max-width: 80%; margin: auto">
                <div class="p-1">
                    <h5>Name:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ $property->name }}">
                    </div>
                </div>
                <div class="p-1">
                    <h5>Price:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" value="{{ $property->price }}">
                    </div>
                </div>
                <div class="p-1">
                    <h5>Location:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="location" value="{{ $property->location }}">
                    </div>
                </div>
                <div class="p-1 d-flex flex-row justify-content-between" style="width: 80%">
                    <div class="d-flex flex-column">
                        <h5>Type:</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="type" value="{{ $property->type }}">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>Area (m2):</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="area" value="{{ $property->area }}">
                        </div>
                    </div>
                </div>
                <div class="p-1 d-flex flex-row justify-content-between" style="width: 80%">
                    <div class="d-flex flex-column">
                        <h5>Bedrooms:</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="bed" value="{{ $property->bed }}">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>Bathrooms:</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="bathroom" value="{{ $property->bathroom }}">
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <h5>Garage:</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="garage" value="{{ $property->garage }}">
                    </div>
                </div>

                <div class="p-1">
                    <h5>Amenities:</h5>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="amenities" value="{{ $property->amenities }}">
                        </div>
                    </div>
                </div>

                <div class="p-1">
                    <h5>Description:</h5>
                    <div class="form-group">
                        <textarea type="text" class="form-control" rows="3" name="description">
                            {{ $property->description }}
                        </textarea>
                    </div>
                </div>

                <div class="p-1">
                    Image
                    <input type="file" name="image" class="form-control">
                </div>

                <div>
                    TODO : Update Gambar
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <br>
                    <i>{{$error}}</i>
                    @endforeach
                @endif

                <div class="property-buttons justify-content-center" style="margin-top: 0.8rem;">
                    <button type="submit" class="btn text-light btn-success" style="">Save Changes</button>
                    <a href="{{ back() }}" class="btn text-light btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
