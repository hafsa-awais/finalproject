<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;



class PropertiesController extends Controller
{
    // public function index()
    // {
    //     $properties = Properties::all();
    //     return view('homepage', ['properties' => $properties]);
    // }

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
    public function show($id)
    {
        $properties= Properties::find($id);
        return view('single', ['property' => $properties]);
    }
    
    public function search(Request $request)
    {
        $properties = Properties::where([
            [function($query) use ($request){
                if (($term = $request->term)){
                    $query->orWhere('locality', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
       
        ->orderby ('id', 'desc')
        ->paginate(8);
        dd($properties);

        return view('projects.')
    }
    
    
    
}
