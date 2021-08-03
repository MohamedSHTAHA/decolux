<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Settings;
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
        $settings=Settings::orderBy('id','desc')->first();
        if(!empty($settings)){
            $pdf=  $settings->pdf;
        }else{
            $pdf=  '';
        }
        return view('front.index', compact(['services','pdf']));
    }

    public function home()
    {
        return view('home');
    }
}
