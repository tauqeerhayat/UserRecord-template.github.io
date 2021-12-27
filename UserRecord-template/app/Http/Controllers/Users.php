<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    function list()
    {
        $users = User::all();
        return view('userslist', ['users' => $users]);
    }

    function create()
    {
        return view('create');
    }

    function loginsubmit(Request $req)
    {
        return User::select('name')->where([
            ['email', '=', $req->email],
            ['password', '=', $req->password]
        ])->get();
        // print_r($req->input());
        // return User::all();
    }

    function createsubmit(Request $req)
    {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result = $user->save();
        if ($result) {
            return redirect('/user-list');
        }
    }
}
