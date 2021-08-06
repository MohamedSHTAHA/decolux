<?php

namespace App\Http\Controllers\Dashboard;

use App\Apply;
use App\Country;
use App\Http\Controllers\Controller;
use App\Jop;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request->search, function ($q) use ($request) {
            return $q->where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%');
        })->latest()->paginate(10);

        return view('dashboard.users.index', compact(['users']));
    }


    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ];
        $date = $request->validate($rules);
        $date['password'] =  bcrypt($request->password);

        $user = User::create($date);

        session()->flash('success', 'added successfully');
        return redirect()->route('dashboard.users.index');
    }

    public function edit(User  $user)
    {
        return view('dashboard.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {


        $rules = [
            'name' => 'required|min:3',
            'password' => 'nullable|confirmed|min:6',
            'email' => 'required|email|unique:users,email,' . $user->id,

        ];
        $date = $request->validate($rules);
        if ($request->has('password'))
            $date['password'] =  bcrypt($request->password);
        $user->update($date);

        session()->flash('success', 'updated successfully');
        return redirect()->route('dashboard.users.index');
    }
    public function destroy(User  $user)
    {


        $user->delete();
        session()->flash('success', 'deleted successfully');
        return redirect()->route('dashboard.users.index');
    }
}
