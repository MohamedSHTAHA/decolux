<?php

namespace App\Http\Controllers\Front;

use App\Country;
use App\Http\Controllers\Controller;
use App\Services;
use App\ServicesDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $services = Services::when($request->search, function ($q) use ($request) {
            return $q->where('name', '%' . $request->search . '%');
        })->latest()->paginate(5);

        return view('front.services.index', compact(['services']));
    }

   public function showservice($name,Request $request)
    {
        $servicename=Services::where('name',$name)->first();
        if(!empty($servicename)){
            $servicesbyname = ServicesDetails::where('services_id',$servicename->id)->when($request->search, function ($q) use ($request) {
                return $q->where('description', '%' . $request->search . '%');
            })->latest()->paginate(5);
        }else{
            $servicesbyname ='';
        }

        $services=Services::all();

        return view('front.services.index', compact(['servicesbyname','services','servicename']));
    }

}
