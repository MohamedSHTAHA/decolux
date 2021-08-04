<?php

namespace App\Http\Controllers\Front;

use App\Apply;
use App\Country;
use App\Http\Controllers\Controller;
use App\Jop;
use App\Mail\SendJopEmail;
use App\Settings;
use App\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class JopController extends Controller
{
    public function index(Request $request)
    {

        $jops = Jop::when($request->search, function ($q) use ($request) {
            return $q->where('title', '%' . $request->search . '%')->orWhere('description', '%' . $request->search . '%');
        })->latest()->paginate(100);

        return view('front.jops.index', compact(['jops']));
    }

    public function show($id)
    {
        $jop = Jop::findOrFail($id);
        $next_jop = Jop::where('id', '>', $jop->id)->orderBy('id')->first();
        $previous_jop = Jop::where('id', '<', $jop->id)->orderBy('id')->first();
        return view('front.jops.show', compact(['jop', 'next_jop', 'previous_jop']));
    }


    public function apply(Request $request)
    {

        $rules = [
            'lastname' => 'required|min:3',
            'firstname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'jop_id' => 'exists:jops,id',
            "resume" => "required|file|mimes:doc,docx,pdf|max:5000"

        ];

        $request->validate($rules);


        $apply = Apply::create($request->all());

        if ($request->file('resume')) {
            $apply->addMedia($request->resume)->toMediaCollection('applies');
        }
        $setting = Settings::first();

        try {
            Mail::to('mohamed.sh.taha2015@gmail.com')->send(new SendJopEmail($apply));
        } catch (\Throwable $th) {
            //throw $th;
        }
        session()->flash('success', 'Apply successfully');
        return redirect()->route('front.job-openings.index');
    }
}
