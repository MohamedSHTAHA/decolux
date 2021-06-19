<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $galleries = Gallery::when($request->search, function ($q) use ($request) {
            return $q->where('name', '%' . $request->search . '%');
        })->latest()->paginate(3);
        return view('dashboard.galleries.index', compact(['galleries']));
    }
    public function create()
    {
        return view('dashboard.galleries.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'title' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            //return Redirect::back()->withErrors([]);
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $gallery = Gallery::create($request->all());

        if ($request->hasFile('image')) {
            $gallery->addMedia($request->image)->toMediaCollection('galleries');

        }
        session()->flash('success', 'added successfully');
        return redirect()->route('dashboard.galleries.index');
    }

    public function edit(Gallery  $gallery)
    {
        return view('dashboard.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'title' => 'required|min:3',
           
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            //return Redirect::back()->withErrors([]);
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $gallery->update($request->all());

        if ($request->hasFile('image')) {
            $gallery->clearMediaCollection('galleries')->addMedia($request->image)->toMediaCollection('galleries');

        }
        session()->flash('success', 'updated successfully');
        return redirect()->route('dashboard.galleries.index');
    }
    public function destroy(Gallery  $gallery)
    {

        $gallery->clearMediaCollection('galleries'); // all media in the images collection will be deleted

        $gallery->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('dashboard.galleries.index');
    }
}
