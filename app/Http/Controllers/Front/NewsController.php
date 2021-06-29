<?php

namespace App\Http\Controllers\Front;

use App\Country;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::when($request->search, function ($q) use ($request) {
            return $q->where('title', '%' . $request->search . '%')->orWhere('description', '%' . $request->search . '%');
        })->latest()->paginate(5);

        return view('front.news.index', compact(['news']));
    }

   public function blogdetails($id)
    {

        $new=  News::with('newsComments')->with('users')->where('id',$id)->first();
        $oldernew=  News::with('newsComments')->with('users')->orderBy('id','desc')->first();

        return view('front.news.show', compact(['new','oldernew']));
    }

    public function savecomments($id,Request $request)
    {
       // $request_data = $request->all();
        $request_data['news_id']=$id;
        $request_data['name']=$request->first .' ' . $request->last;
        $request_data['phone']=$request->phone ;
        $request_data['email']=$request->email;
        $request_data['comment']=$request->comment;
        NewsComments::create($request_data);


        return redirect()->back();
    }



}
