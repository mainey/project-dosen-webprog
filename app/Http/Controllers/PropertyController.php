<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function viewHomePage() {
        return view('properties.propertiesHome');
    }
}
