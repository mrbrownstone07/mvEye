<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function archProject(){
        return view('projects.arch');
    }

    public function interiorProject(){
        return view('projects.interior');
    } 
}
