<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Faqs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class FaqsController extends Controller
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
        $faqss = Faqs::when($request->search, function ($q) use ($request) {
            return $q->where('question', 'like','%' . $request->search . '%')
                         ->orWhere('answer', 'like', '%' . $request->search . '%');

                })->latest()->paginate(5);
        return view('dashboard.faqs.index', compact('faqss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.faqs.create');
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
            'question' => 'required',
            'answer' => 'required',
        ];
        $request->validate($rules);
        $request_data = $request->all();



        Faqs::create($request_data);
        session()->flash('success','added successfully');
        return redirect()->route('dashboard.faqs.index');
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
        $faqs=Faqs::where('id',$id)->first();
        return view('dashboard.faqs.edit', compact('faqs'));
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
        $faqs=Faqs::where('id',$id)->first();
        $rules = [
            'question' => 'required',
            'answer' => 'required',
        ];
        $request->validate($rules);
        $request_data = $request->except(['_token', '_method']);


        Faqs::where('id',$id)->update($request_data);
        session()->flash('success','updated successfully');
        return redirect()->route('dashboard.faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        Faqs::where('id',$id)->delete();
        session()->flash('success','deleted successfully');
        return redirect()->route('dashboard.faqs.index');
    }


}
