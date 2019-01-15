<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.landing');
    }

    public function aboutUs(){
        return view('pages.about_us');
    }

    public function contactUs(){
        return view('pages.contact_us');
    }

    public function news(){
        return view('pages.news');
    }

    public function jobs(){
        return view('pages.jobs');
    }
}
