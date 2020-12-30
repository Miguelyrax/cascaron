<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $houses = House::take(3)->get();

        return view('welcome', compact('houses'));

    }
    
}
