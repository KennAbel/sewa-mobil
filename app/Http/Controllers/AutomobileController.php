<?php

namespace App\Http\Controllers;

use App\Models\Automobile;
use Illuminate\Http\Request;

class AutomobileController extends Controller
{
    public function index()
    {
        $automobiles = Automobile::all();
        return view('automobile.index', compact('automobiles'));
    }
}

