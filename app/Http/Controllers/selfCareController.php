<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class selfCareController extends Controller
{
    public function index()
    {
        return view('Modules.selfCare');
    }
}