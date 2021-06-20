<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ContactUsController extends Controller
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
        $contactus = ContactUs::when($request->search, function ($q) use ($request) {
            return $q->where('name', 'like','%' . $request->search . '%')      
            ->orWhere('email', 'like', '%' . $request->search . '%')
            ->orWhere('phone', 'like', '%' . $request->search . '%')
            ->orWhere('company_name', 'like', '%' . $request->search . '%')
            ->orWhere('company_Address', 'like', '%' . $request->search . '%')
            ->orWhere('comment_message', 'like', '%' . $request->search . '%');

                })->latest()->paginate(5);
        return view('dashboard.contactus.index', compact('contactus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contactus.create');
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
            'email' => 'required',
            'phone' => 'required',
            'company_name' => 'required',
            'company_Address' => 'required',
            'comment_message' => 'required',
         
            
        ];
        $request->validate($rules);
        $request_data = $request->all();

        ContactUs::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('dashboard.contactUs.index');
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
    public function edit( $id)
    {
        $contacts=ContactUs::where('id',$id)->first();
        return view('dashboard.contactus.edit', compact('contacts'));
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
            'email' => 'required',
            'phone' => 'required',
            'company_name' => 'required',
            'company_Address' => 'required',
            'comment_message' => 'required',
        ];
        $request->validate($rules);
        $request_data = $request->except(['_token', '_method']);
        
 
        ContactUs::where('id',$id)->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('dashboard.contactUs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        ContactUs::where('id',$id)->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('dashboard.contactUs.index');
    }
   

   

}
