<?php


namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Services;
use App\ServicesDetails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Services::with('users')->when($request->search, function ($q) use ($request) {
                return $q->where('name', 'like','%' . $request->search . '%');
                })->when($request->user_id, function ($q) use ($request) {
                    return $q->where('user_id', $request->user_id);
                })->latest()->paginate(5);
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create');
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
            'name' => 'required',
            'menue_name' => 'required',

        ];
        $request->validate($rules);
        $request_data = $request->all();
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/services_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        $request_data['user_id'] =auth()->user()->id;
        Services::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('dashboard.services.index');
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
    public function edit($id)
    {
        $services=Services::where('id',$id)->first();
        return view('dashboard.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $rules = [
            'name' => 'required',
            'menue_name' => 'required',

        ];
        $services=Services::where('id',$id)->first();
        $request->validate($rules);
        $request_data = $request->except(['_token', '_method']);
        if ($request->image) {

            if ($services->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/services_images/' . $services->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/services_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        $request_data['user_id'] =auth()->user()->id;
        Services::where('id',$id)->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('dashboard.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=Services::where('id',$id)->first();
        if ($services->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/services_images/' . $services->image);

        }//end of if

        Services::where('id',$id)->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('dashboard.services.index');
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
