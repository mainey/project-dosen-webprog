<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
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
        $property = Property::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:15|unique:properties,name,' . $id,
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

        // $pro_update = Property::find($id);
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $imageName = time() . '.' . $file->getClientOriginalExtension();

        //     Storage::putFileAs('public/images', $file, $imageName);

        //     Storage::delete('public/' . $pro_update->image);

        //     Property::where('id', $id)->update([
        //         'image' => 'images/' . $imageName,
        //     ]);
        // }

        Property::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'location' => $request->location,
            'type' => $request->type,
            'area' => $request->area,
            'bed' => $request->bed,
            'bathroom' => $request->bathroom,
            'garage' => $request->garage,
        ]);

        return redirect()->route('propertiesHome');
    }
}
