<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;



class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Properties::all();
        return view ('homepage',['properties'=> $properties]);
    }
}
