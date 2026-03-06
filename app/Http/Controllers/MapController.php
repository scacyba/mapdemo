<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

class MapController extends Controller
{
    public function index()
    {
        $points = Point::all();
        return view('map',compact('points'));
    }
}
