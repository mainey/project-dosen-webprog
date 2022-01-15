@extends('layout')

@section('title', 'Home')

@section('content')


<div class="bg-image home-image dim-image img-edge"></div>
<div class="home-title title-text-above">Here's the best way to</div>
<div class="home-title title-text">Find your perfect Home</div>

<div class="home-title title-search">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search for your dream home" aria-label="Search">
        <button class="btn bg-light" type="submit">Search</button>
    </form>
</div>

<div class="col-md-10 mx-auto" id="content">
    <div class="container">
        <div class="d-flex mb-3" style="margin-top: 20px">
            <h2 class="p-2 featured-title">
                Featured Properties
            </h2>
            <a href="" class="btn bg-light ms-auto p-2 featured-buttons">More Projects</a>
        </div>
    </div>

    <div class="container featured-items">
        {{-- Buat Featured Items, bikin card templat dulu, terus pake db buat tampilin 3 aja --}}
    </div>
</div>

@endsection

@section('footer')

@endsection
