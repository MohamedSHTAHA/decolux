<?php

namespace App\Http\Controllers\Front;

use App\Country;
use App\Http\Controllers\Controller;
use App\Faqs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FaqsController extends Controller
{
    public function index(Request $request)
    {
        $faqss = Faqs::when($request->search, function ($q) use ($request) {
            return $q->where('question', '%' . $request->search . '%');
        })->latest()->paginate(5);

        return view('front.faqs.index', compact(['faqss']));
    }



}
