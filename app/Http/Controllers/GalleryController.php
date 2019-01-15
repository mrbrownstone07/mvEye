<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function renderGallery(){
        return view('gallery.rendering');
    }

    public function animationGallery(){
        return view('gallery.animation');
    }

}
