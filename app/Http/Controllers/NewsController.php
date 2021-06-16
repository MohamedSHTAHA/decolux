<?php


namespace App\Http\Controllers;
use App\News;
use App\NewsComments;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::with('users')->when($request->search, function ($q) use ($request) {
            return $q->where('title', '%' . $request->search . '%')
                         ->orWhere('description', 'like', '%' . $request->search . '%');
        })->when($request->user_id, function ($q) use ($request) {
                    return $q->where('user_id', $request->user_id);
                })->latest()->paginate(5);
        return view('dashboard.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        $request->validate($rules);
        $request_data = $request->all();
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/news_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        $request_data['user_id'] =auth()->user()->id;
        News::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News  $news)
    {
        return view('dashboard.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        $request->validate($rules);
        $request_data = $request->all();
        if ($request->image) {

            if ($news->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/news_images/' . $news->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/news_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        $request_data['user_id'] =auth()->user()->id;
        $news->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News  $news)
    {
        
        if ($news->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/news_images/' . $news->image);

        }//end of if

        $news->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('news.index');
    }
    public function comments(Request $request){
       
        $comments = NewsComments::with('news')->when($request->search, function ($q) use ($request) {
            return $q->where('comment', '%' . $request->search . '%')
                     ->orWhere('name', 'like', '%' . $request->search . '%')
                     ->orWhere('email', 'like', '%' . $request->search . '%');
            })->when($request->news_id, function ($q) use ($request) {
                return $q->where('news_id', $request->news_id);
            })->latest()->paginate(5);
    return view('dashboard.news.comments', compact('comments'));
        
    }

    public function newscomments($id,Request $request){
        $comments = NewsComments::where('news_id',$id)->with('news')->when($request->search, function ($q) use ($request) {
            return $q->where('comment', '%' . $request->search . '%')
                     ->orWhere('name', 'like', '%' . $request->search . '%')
                     ->orWhere('email', 'like', '%' . $request->search . '%');
            })->when($request->news_id, function ($q) use ($request) {
                return $q->where('news_id', $request->news_id);
            })->latest()->paginate(5);
    return view('dashboard.news.comments', compact('comments'));
    }
    
}
