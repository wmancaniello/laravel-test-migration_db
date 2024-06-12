<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $houseInfo = House::all();
        // dd($houseInfo);
        return view('houses', compact('houseInfo'));
    }
}
