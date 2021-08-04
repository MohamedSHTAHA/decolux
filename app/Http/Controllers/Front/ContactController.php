<?php

namespace App\Http\Controllers\Front;

use App\Country;
use App\Http\Controllers\Controller;
use App\ContactUs;
use App\Mail\SendContactEmail;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        $contactUs = ContactUs::create($request_data);
        $setting = Settings::first();

        try {
            // Mail::to('mohamed.sh.taha2015@gmail.com')->send(new SendJopEmail($apply));
            Mail::to($setting->email)->send(new SendContactEmail($contactUs));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect()->back();
    }
}
