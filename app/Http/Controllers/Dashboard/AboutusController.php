<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AboutusController extends Controller
{
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aboutus = AboutUs::when($request->search, function ($q) use ($request) {
            return $q->where('text', 'like','%' . $request->search . '%');

                })->latest()->paginate(5);
        return view('dashboard.aboutus.index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request_data = $request->all();
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/aboutus/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
      
  
       
        if ($request->pdf) {
            $file = $request->file('pdf');
            $filename = time() . '.' . $request->file('pdf')->extension();
            $filePath = public_path('uploads/aboutus/');
            $file->move($filePath, $filename);
          
            $request_data['pdf'] = $filename;
        }

     
        AboutUs::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('dashboard.aboutus.index');
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
        $aboutus=AboutUs::where('id',$id)->first();

        return view('dashboard.aboutus.edit', compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$setting=AboutUs::where('id',$id)->first();
      
        $request_data = $request->except(['_token', '_method']);
        if ($request->image) {

            if ($setting->image != '') {

                Storage::disk('public_uploads')->delete('/aboutus/' . $setting->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/aboutus/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if

       
 
   

            if ($request->pdf) {
                $file = $request->file('pdf');
                $filename = time() . '.' . $request->file('pdf')->extension();
                $filePath = public_path('uploads/archives/');
                $file->move($filePath, $filename);
              
                $data['pdf'] = $filename;
            }
      

            AboutUs::where('id',$id)->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('dashboard.aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $setting=AboutUs::where('id',$id)->first();
        if ($setting->image != '') {

            Storage::disk('public_uploads')->delete('/aboutus/' . $setting->image);

        }//end of if

        AboutUs::where('id',$id)->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('dashboard.aboutus.index');
    }


}
