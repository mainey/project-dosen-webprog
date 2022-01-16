<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function viewHomePage()
    {
        return view('properties.propertiesHome');
    }

    public function viewPropertyDetail($id)
    {
        $property = Property::find($id);

        return view('properties.propertiesView', compact('property'));
    }
}
