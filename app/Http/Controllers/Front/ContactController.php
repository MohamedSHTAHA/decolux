<?php

namespace App\Http\Controllers\Front;

use App\Country;
use App\Http\Controllers\Controller;
use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(Request $request)
    {


        return view('front.contacts.index');
    }

    public function savecontact(Request $request)
    {
       $request_data = $request->all();
  
        ContactUs::create($request_data);


        return redirect()->back();
    }

}
