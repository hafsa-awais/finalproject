<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use Browser;

class PropertiesController extends Controller
{
    // homepage (all properties)
    public function index()
    {
        $properties = Properties::all();
        return view('homepage', ['properties' => $properties]);
    }

    // description (single property)
    public function show($id)
    {
        $properties = Properties::find($id);

        if (Browser::isDesktop()) {
            return view('descriptiondesk', ['property' => $properties]);
        }
        else {
            return view('descriptionmobi', ['property' => $properties]);
        }
    }

    // search function
    public function search(Request $request)

    {
        // $search = $request->input('search');
        // $properties = Properties::query()

        // ->where('locality', 'LIKE', '%{$search}%')
        // ->get();

        // if(count($properties) > 0)
        // return view('/search', ['properties' => $properties]);
        // else 
        //     return view ('search')->withMessage('No properties found in this location. Try to search again!');

    }

    // upload file function
    public function upload_file()
    {
        return view('upload-file');
    }

    public function upload_file_submit(Request $request)
    {
        // Validate the file
        $request->validate([
            'myFile' => 'required|mimes:jpg,png'
        ]);

        // Rename the file
        // $fileName = time() . '.' . $request->myFile->extension();
        $fileName = $request->myFile->getClientOriginalName();

        // Save the public path 
        $publicPath = public_path('assets/propertypics/');

        // Save the file in the public/uploads folder
        $request->myFile->move($publicPath, $fileName);
    }

    // category pages
    public function get_data_wedding()
    {
        $properties = Properties::join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "wedding")
            ->get();

        return view('categories.wedding', ['properties' => $properties]);
    }

    public function get_data_birthday()
    {
        $properties = Properties::join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "birthday")
            ->get();

        return view('categories.birthday', ['properties' => $properties]);
    }

    public function get_data_photoshoot()
    {
        $properties = Properties::join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "photoshoot")
            ->get();

        return view('categories.photoshoot', ['properties' => $properties]);
    }

    public function get_data_photography()
    {
        $properties = Properties::join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "photography")
            ->get();

        return view('categories.photography', ['properties' => $properties]);
    }
    
    public function get_data_music()
    {
        $properties = Properties::join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "music")
            ->get();

        return view('categories.music', ['properties' => $properties]);
    }
}
