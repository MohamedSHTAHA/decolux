<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        $types = Type::when($request->search, function ($q) use ($request) {
            return $q->where('title','like', '%' . $request->search . '%');
        })->latest()->paginate(3);
        return view('dashboard.types.index', compact(['types']));
    }
    public function create()
    {
        return view('dashboard.types.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'title' => 'required|min:3|unique:types',
        ];
        $request->validate($rules);

        $type = Type::create($request->all());

      
        session()->flash('success', 'added successfully');
        return redirect()->route('dashboard.types.index');
    }

    public function edit(Type  $type)
    {
        return view('dashboard.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $rules = [
            'title' => 'required|min:3|unique:types,title,'.$type->id,
        ];
        $request->validate($rules);


        $type->update($request->all());

        session()->flash('success', 'updated successfully');
        return redirect()->route('dashboard.types.index');
    }
    public function destroy(Type  $type)
    {

        $type->clearMediaCollection('types'); // all media in the images collection will be deleted

        $type->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('dashboard.types.index');
    }
}
