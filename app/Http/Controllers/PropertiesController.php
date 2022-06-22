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

    public function show($id)
    {
        $properties = Properties::find($id);
        return view('/description', ['properties' => $properties]);
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

            return view('categories.wedding', ['properties' => $properties]);  
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

            return view('categories.birthday', ['properties' => $properties]);  
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

            return view('categories.photoshoot', ['properties' => $properties]);  
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

            return view('categories.photography', ['properties' => $properties]);  
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

            return view('categories.music', ['properties' => $properties]);  
    }
    
}