<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::simplePaginate(2);
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->nombreUsuario = $request->nombreUsuario;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index');
    }


    public function show($id)
    {

    }


    public function edit( User $user)
    {
        return view('users.edit',compact('user'));

    }

    public function update(Request $request, User $user)
    {

        $user->nombre_usuario = $request->nombre_usuario;
        $user->email = $request->email;
        $user->password = $request->password;
        session()->flash('message', 'Usuario actualizado satisfactoriamente!');
        return redirect()->route('users.create');

    }

    public function destroy($id)
    {

    }
}
