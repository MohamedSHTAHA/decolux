<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::get();
        return view('front.galleries.index', compact(['galleries']));
    }
   
  
}
