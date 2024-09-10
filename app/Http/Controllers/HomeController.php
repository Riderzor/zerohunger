<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodlisting;
use App\Models\contact;

class HomeController extends Controller
{
    public function index()
    {
        $foods = foodlisting::all();
        // $contacts = contact::all();

        return view('dashboard', compact('foods'));

    }

   
}


