<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return ('index');
        return view('dashboard.projects.index');
    }
    public function create()
    {
        dd('asdas');
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {

    }
}
