<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function archService(){
        return view('services.arch');
    }

    public function interiorService(){
        return view('services.interior');
    }

    public function renderService(){
        return view('services.render');
    }

    public function animationService(){
        return view('services.animation');
    }
}
