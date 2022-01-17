@extends('layout')

@section('title', 'AboutUs')

@section('content')

    <tr>
        <th class="px-5">Name:</th>
        <th>{{ auth()->user()->name }}</th>
    </tr>
    <tr>
        <th class="px-5">Email:</th>
        <th>{{ auth()->user()->email }}</th>
    </tr>
    <tr>
        <th class="px-5">Phone:</th>
        <th>{{ auth()->user()->phone }}</th>
    </tr>
    <tr>
        <th class="px-5">Address:</th>
        <th>{{ auth()->user()->address }}</th>
    </tr>

@endsection
