<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        return response()->json(["message" => "index working!!!"], 200);
    }
}
