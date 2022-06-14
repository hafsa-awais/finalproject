<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // test page for API
    public function test()
    {
        return view('apitest');
    }

}
