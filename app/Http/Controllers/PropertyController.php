<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

    public function viewBuildingUpdate($id)
    {
        $property = Property::find($id);

        return view('properties.propertiesUpdate', compact('property'));
    }

    public function updatePropertyDesc($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15|unique:properties,name,' . $id,
            'price' => 'required|numeric|between:1000000,100000000',
            'location' => 'required|max:15',
            'type' => 'required|max:10',
            'area' => 'required|max:10',
            'bed' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
            'image' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $property = Property::find($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();

            Storage::putFileAs('public/images', $file, $imageName);

            Storage::delete('public/' . $property->image);

            Property::where('id', $id)->update([
                'image' => 'images/' . $imageName,
            ]);
        }

        Property::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'location' => $request->location,
            'type' => $request->type,
            'area' => $request->area,
            'bed' => $request->bed,
            'bathroom' => $request->bathroom,
            'garage' => $request->garage,
            'amenities' => $request->amenities,
            'description' => $request->description,
        ]);

        return redirect()->route('propertiesHome');
    }

    public function viewBuildingAdd()
    {
        return view('properties.propertiesAdd');
    }

    public function addPropertyDesc(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15|unique:properties,name,',
            'price' => 'required|numeric|between:1000000,100000000',
            'location' => 'required|max:15',
            'type' => 'required|max:10',
            'area' => 'required|max:10',
            'bed' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'garage' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $property = new Property();
        $property->name = $request->name;
        $property->price = $request->price;
        $property->location = $request->location;
        $property->type = $request->type;
        $property->area = $request->area;
        $property->bed = $request->bed;
        $property->bathroom = $request->bathroom;
        $property->garage = $request->garage;
        $property->description = $request->description;
        $property->amenities = $request->amenities;

        $file = $request->file('image');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $property->image = 'images/' . $imageName;

        $property->save();

        return redirect('/');
    }
}
