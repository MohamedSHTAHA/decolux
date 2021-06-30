<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\ServicesDetails;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services=Services::all();

        return view('front.index', compact(['services']));
    }

    public function home()
    {
        return view('home');
    }
}
