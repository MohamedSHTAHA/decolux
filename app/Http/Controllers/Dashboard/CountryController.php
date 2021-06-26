<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $countries = Country::when($request->search, function ($q) use ($request) {
            return $q->where('title', 'like','%' . $request->search . '%');
        })->latest()->paginate(3);
        return view('dashboard.countries.index', compact(['countries']));
    }
    public function create()
    {
        return view('dashboard.countries.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'title' => 'required|min:3|unique:countries',
        ];
        $request->validate($rules);

        $country = Country::create($request->all());

      
        session()->flash('success', 'added successfully');
        return redirect()->route('dashboard.countries.index');
    }

    public function edit(Country  $country)
    {
        return view('dashboard.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $rules = [
            'title' => 'required|min:3|unique:countries,title,'.$country->id,
        ];
        $request->validate($rules);


        $country->update($request->all());

        session()->flash('success', 'updated successfully');
        return redirect()->route('dashboard.countries.index');
    }
    public function destroy(Country  $country)
    {

        $country->clearMediaCollection('countries'); // all media in the images collection will be deleted

        $country->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('dashboard.countries.index');
    }
}
