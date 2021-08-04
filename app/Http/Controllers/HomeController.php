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
        if(!empty($settings)){
            $slider1=  'front/logo/'.$settings->sliderimg1 ;
        }else{
            $slider1=  'front/images/slider-1.jpg';
        }
        if(!empty($settings)){
            $slider2=  'front/logo/'.$settings->sliderimg2 ;
        }else{
            $slider2=  'front/images/Slider-2.jpg';
        }
        if(!empty($settings)){
            $footerimage=  'front/logo/'.$settings->footerimg ;
        }else{
            $footerimage=  '';
        }
        return view('front.index', compact(['services','pdf','slider1','slider2','footerimage']));
    }

    public function home()
    {
        return view('home');
    }
}
