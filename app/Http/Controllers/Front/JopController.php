<?php

namespace App\Http\Controllers\Front;

use App\Country;
use App\Http\Controllers\Controller;
use App\Jop;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class JopController extends Controller
{
    public function index(Request $request)
    {
        $jops = Jop::when($request->search, function ($q) use ($request) {
            return $q->where('title', '%' . $request->search . '%')->orWhere('description', '%' . $request->search . '%');
        })->latest()->paginate(3);

        return view('front.jops.index', compact(['jops']));
    }

    public function show(Jop $jop)
    {
        return view('front.jops.show', compact(['jop']));
    }
 
}
