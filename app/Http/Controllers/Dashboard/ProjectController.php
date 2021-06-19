<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::when($request->search, function ($q) use ($request) {
            return $q->where('name', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
        })->latest()->paginate(3);
        return view('dashboard.projects.index', compact(['projects']));
    }
    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'client' => 'required|min:3',
            'consultant' => 'required|min:3',
            'contractor' => 'required|min:3',
            'value' => 'required|numeric|gt:0',
            'from' => 'required|date',
            'to' => 'required|date|after_or_equal:from',
            'scope_work' => 'required|min:3',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            //return Redirect::back()->withErrors([]);
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $project = Project::create($request->all());

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->addMedia($image)->toMediaCollection('projects');
            }
        }
        session()->flash('success', 'added successfully');
        return redirect()->route('dashboard.projects.index');
    }

    public function edit(Project  $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'client' => 'required|min:3',
            'consultant' => 'required|min:3',
            'contractor' => 'required|min:3',
            'value' => 'required|numeric|gt:0',
            'from' => 'required|date',
            'to' => 'required|date|after_or_equal:from',
            'scope_work' => 'required|min:3',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'old_images' => 'exists:media,id',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            //return Redirect::back()->withErrors([]);
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        $project->update($request->all());
        $project->getMedia('projects')->whereNotIn('id',$request->old_images)->each->delete();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $project->addMedia($image)->toMediaCollection('projects');
            }
        }
        session()->flash('success', 'updated successfully');
        return redirect()->route('dashboard.projects.index');
    }
    public function destroy(Project  $project)
    {

        $project->clearMediaCollection('projects'); // all media in the images collection will be deleted

        $project->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('dashboard.projects.index');
    }
}
