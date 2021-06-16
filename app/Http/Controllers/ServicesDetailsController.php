<?php


namespace App\Http\Controllers;
use App\Services;
use App\ServicesDetails;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServicesDetailsController extends Controller
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
        $servicesdetails = ServicesDetails::with('services')->when($request->search, function ($q) use ($request) {
                return $q->where('description', '%' . $request->search . '%');
                })->when($request->services_id, function ($q) use ($request) {
                    return $q->where('services_id', $request->services_id);
                })->latest()->paginate(5);
                $services = Services::all();
              
        return view('dashboard.servicesdetails.index', compact('servicesdetails','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::all();
        return view('dashboard.servicesdetails.create', compact('services'));
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
            'services_id' => 'required',
            'description' => 'required',
        ];
        $request->validate($rules);
        $request_data = $request->all();
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/servicesdetails_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
       
        ServicesDetails::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('servicesdetails.index');
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
        $servicesdetails=ServicesDetails::where('id',$id)->first();
        $services = Services::all();
        return view('dashboard.servicesdetails.edit', compact('servicesdetails','services'));
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
            'services_id' => 'required',
            'description' => 'required',
            
        ];
        $services=ServicesDetails::where('id',$id)->first();
        $request->validate($rules);
        $request_data = $request->except(['_token', '_method']);
        if ($request->image) {

            if ($services->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/servicesdetails_images/' . $services->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/servicesdetails_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
      
        ServicesDetails::where('id',$id)->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('servicesdetails.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=ServicesDetails::where('id',$id)->first();
        if ($services->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/servicesdetails_images/' . $services->image);

        }//end of if

        ServicesDetails::where('id',$id)->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('servicesdetails.index');
    }
 

  
    
}
