<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Alert;
use Image;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin',['except'=>['edit','updates']]);
    }


    public function index()
    {
        return view('users.index',[
            'users'=>User::all()
        ]);
    }

    public function create()
    {
        $roles=Role::pluck('display_name','id');
        return view('users.create',compact('roles'));
    }

    public function store(CreateUserRequest $request)
    {
        $user=User::create( $request->all());
        if ($request->hasFile('avatar'))
        {
            $user->avatar=$request->file('avatar')->store('public/img/profilespics');
        }
        $user->roles()->sync($request->roles);
        return redirect()->route('usuarios.index')->with('success', 'Usuario Registrado');
    }

    public function show($id)
    {
       $user = User::findOrFail($id);
       return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $roles=Role::pluck('display_name','id');
        return view('users.edit',compact('user','roles'));
    }

    public function update(UpdateUserRequest $request, $id)
    {

        $user = User::findOrFail($id);
        $this->authorize($user);
        if ($request->hasFile('avatar'))
        {
            $user->avatar=$request->file('avatar')->store('public/img/profilespics');
        }
        $user->update($request->only('name','email','state','lastname1','lastname2','rango'));
        $user->roles()->sync($request->roles);
        return redirect()->route('usuarios.index')->with('success', 'Datos Actualizados');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->delete();
        return redirect()->route('usuarios.index');
    }

    public function edi()
    {
        return view('users.edi',[
            'users'=>User::all()
        ]);
    }
}