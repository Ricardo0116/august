<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        // select * from users
        return view('users.index',compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    // detalles po id
    public function show($id)
    {
        // select * from users where id = ?
        $user = User::find($id);
        // view
        return view('users.show',compact('user'));
    }
    public function store(Request $request)
    {
        $user = User::create([
            'names' => $request->input('names'),
            'lastnames' => $request->input('lastnames'),
            'email' => $request->input('email'),
        ]);
        return redirect('users');
    }
    // eleminar usuario
    public function destroy($id)
    {
        // delete from user where id = ?
        $user = User::find($id)->delete();
        return redirect('users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    public function update (request $request, $id)
    {
        $user = User::find($id)->update([
            'names' => $request->input('names'),
            'lastnames' => $request->input('lastnames'),
            'email' => $request->input('email'),
        ]);
        return redirect('users')->with('status', 'Se ha Actualizado');
    }
}
