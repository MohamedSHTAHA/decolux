<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::get();
        return view('front.projects.index', compact(['projects']));
    }
   
}
