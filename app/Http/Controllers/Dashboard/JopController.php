<?php

namespace App\Http\Controllers\Dashboard;

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

        return view('dashboard.jops.index', compact(['jops']));
    }
    public function create()
    {
        $countries = Country::all();
        $types = Type::all();
        return view('dashboard.jops.create', compact(['countries', 'types']));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'country_id' => 'required|exists:countries,id',
            'type_id.*' => 'required|min:1|exists:types,id',
        ];
        $jop_date = $request->validate($rules);
        $jop_date['user_id'] = auth()->user()->id;
        $jop = Jop::create($jop_date);
        $jop->types()->attach($request->type_id);

        session()->flash('success', 'added successfully');
        return redirect()->route('dashboard.jops.index');
    }

    public function edit(Jop  $jop)
    {
        $countries = Country::all();
        $types = Type::all();
        return view('dashboard.jops.edit', compact(['countries', 'types','jop']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jop $jop)
    {
       

        $rules = [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'country_id' => 'required|exists:countries,id',
            'type_id.*' => 'required|min:1|exists:types,id',
        ];
        $jop_date = $request->validate($rules);
        $jop_date['user_id'] = auth()->user()->id;
        $jop->types()->sync($request->type_id);
        $jop->update($jop_date);

        session()->flash('success', 'updated successfully');
        return redirect()->route('dashboard.jops.index');
    }
    public function destroy(Jop  $jop)
    {


        $jop->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('dashboard.jops.index');
    }
}
