<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SettingssController extends Controller
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
        $settings = Settings::when($request->search, function ($q) use ($request) {
            return $q->where('title', 'like','%' . $request->search . '%')
                         ->orWhere('description', 'like', '%' . $request->search . '%')
                         ->orWhere('email', 'like', '%' . $request->search . '%')
                         ->orWhere('phone', 'like', '%' . $request->search . '%')
                         ->orWhere('address', 'like', '%' . $request->search . '%')
                         ->orWhere('lat', 'like', '%' . $request->search . '%')
                         ->orWhere('long', 'like', '%' . $request->search . '%');

                })->latest()->paginate(5);
        return view('dashboard.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $rules = [
            'title' => 'required',
            'discpriton' => 'required',
            'email' => 'required',
            'website'=>'required',
            'phone' => 'required',
            'address' => 'required',
            'facbook' => 'required',
            'twiter' => 'required',
            'linkedin' => 'required',
            'instgram' => 'required',
            'binterest' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ];
        $request->validate($rules);*/
        $request_data = $request->all();
        if ($request->logo) {

            Image::make($request->logo)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/logo/' . $request->logo->hashName()));

            $request_data['logo'] = $request->logo->hashName();

        }//end of if
        if ($request->sliderimg1) {

            Image::make($request->sliderimg1)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('front/logo/' . $request->sliderimg1->hashName()));

            $request_data['sliderimg1'] = $request->sliderimg1->hashName();

        }//end of if
        if ($request->sliderimg2) {

            Image::make($request->sliderimg2)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('front/logo/' . $request->sliderimg2->hashName()));

            $request_data['sliderimg2'] = $request->sliderimg2->hashName();

        }//end of if
        if ($request->footerimg) {

            Image::make($request->footerimg)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('front/logo/' . $request->footerimg->hashName()));

            $request_data['footerimg'] = $request->footerimg->hashName();

        }//end of if
        if ($request->pdf) {
            $file = $request->file('pdf');
            $filename = time() . '.' . $request->file('pdf')->extension();
            $filePath = public_path('uploads/logo/');
            $file->move($filePath, $filename);
          
            $request_data['pdf'] = $filename;
        }

        if($request->web=="on"){
            $request_data['web'] =1;
        }else{
            $request_data['web'] =0;
        }
        Settings::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('dashboard.settings.index');
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
        $setting=Settings::where('id',$id)->first();

        return view('dashboard.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$setting=Settings::where('id',$id)->first();
       /* $rules = [
            'title' => 'required',
            'discpriton' => 'required',
            'email' => 'required',
            'website'=>'required',
            'phone' => 'required',
            'address' => 'required',
            'facbook' => 'required',
            'twiter' => 'required',
            'linkedin' => 'required',
            'instgram' => 'required',
            'binterest' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ];
        $request->validate($rules);*/
        $request_data = $request->except(['_token', '_method']);
        if ($request->logo) {

            if ($setting->logo != 'default.png') {

                Storage::disk('public_uploads')->delete('/logo/' . $setting->logo);

            }//end of if

            Image::make($request->logo)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/logo/' . $request->logo->hashName()));

            $request_data['logo'] = $request->logo->hashName();

        }//end of if

        if ($request->sliderimg1) {

            if ($setting->sliderimg1 != '') {

                Storage::disk('public_uploads')->delete('/logo/' . $setting->sliderimg1);

            }//end of if

            Image::make($request->sliderimg1)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('front/logo/' . $request->sliderimg1->hashName()));

            $request_data['sliderimg1'] = $request->sliderimg1->hashName();

        }//end of if
        if ($request->sliderimg2) {

            if ($setting->sliderimg2 != '') {

                Storage::disk('public_uploads')->delete('/logo/' . $setting->sliderimg2);

            }//end of if

            Image::make($request->sliderimg2)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('front/logo/' . $request->sliderimg2->hashName()));

            $request_data['sliderimg2'] = $request->sliderimg2->hashName();

        }//end of if
        if ($request->footerimg) {

            if ($setting->footerimg != '') {

                Storage::disk('public_uploads')->delete('/logo/' . $setting->footerimg);

            }//end of if

            Image::make($request->footerimg)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('front/logo/' . $request->footerimg->hashName()));

            $request_data['footerimg'] = $request->footerimg->hashName();

        }//end of if
       

   

            if ($request->pdf) {
                $file = $request->file('pdf');
                $filename = time() . '.' . $request->file('pdf')->extension();
                $filePath = public_path('uploads/archives/');
                $file->move($filePath, $filename);
              
                $data['pdf'] = $filename;
            }
        if($request->web=="on"){
            $request_data['web'] =1;
        }else{
            $request_data['web'] =0;
        }

        Settings::where('id',$id)->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('dashboard.settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $setting=Settings::where('id',$id)->first();
        if ($setting->logo != 'default.png') {

            Storage::disk('public_uploads')->delete('/logo/' . $setting->logo);

        }//end of if

        Settings::where('id',$id)->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('dashboard.settings.index');
    }


}
