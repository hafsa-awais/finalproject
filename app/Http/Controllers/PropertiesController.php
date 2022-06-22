<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;



class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Properties::limit(8)
        ->get();
        return view('/homepage', ['properties' => $properties]);
    }

    public function search(Request $request)

    {
        // $search = $request->input('search');
        $properties = Properties::query()
        
        // ->where('locality', 'LIKE', '%{$search}%')
        // ->get();

            // if(count($properties) > 0)
                return view('/search', ['properties' => $properties]);
            // else 
            //     return view ('search')->withMessage('No properties found in this location. Try to search again!');

    }
    

    public function get_data_wedding()
    {
        $properties = Properties::select(
            "properties.coverphoto",
            "properties.title",
            "properties.price",
            "properties.locality",

        )
            ->join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "wedding")
            ->get();

            return view('wedding', ['properties' => $properties]);  
    }

    

    public function get_data_birthday()
    {
        $properties = Properties::select(
            "properties.coverphoto",
            "properties.title",
            "properties.price",
            "properties.locality",

        )
            ->join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "birthday")
            ->get();

            return view('birthday', ['properties' => $properties]);  
    }
    public function get_data_photoshoot()
    {
        $properties = Properties::select(
            "properties.coverphoto",
            "properties.title",
            "properties.price",
            "properties.locality",

        )
            ->join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "photoshoot")
            ->get();

            return view('photoshoot', ['properties' => $properties]);  
    }
    public function get_data_photography()
    {
        $properties = Properties::select(
            "properties.coverphoto",
            "properties.title",
            "properties.price",
            "properties.locality",

        )
            ->join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "photography")
            ->get();

            return view('photography', ['properties' => $properties]);  
    }
    public function get_data_music()
    {
        $properties = Properties::select(
            "properties.coverphoto",
            "properties.title",
            "properties.price",
            "properties.locality",

        )
            ->join("events", "properties.id", "=", "events.properties_id")
            ->where("events.event_name", "=", "music_studios")
            ->get();

            return view('music', ['properties' => $properties]);  
    }
    
}