<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();
//        dd($users);
        return view('listAllUsers', ['users' => $users]);
    }

    public function listUsers (User $user)
    {
//        var_dump($user);
        return view('listUser2', ['user' => $user]);
    }

    public function addUser ()
    {
        return view('addUser');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.listAllUsers');
    }

    public function formEditUser (User $user)
    {
        return view('editUser', ['user' => $user]);
    }

    public function editUser (User $user, Request $request)
    {
        $user->name = $request->name;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL))
        {
            $user->email = $request->email;
        }

        if (!empty($request->password))
        {
             $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.listAllUsers');

//        dd($user, $request);
    }

    public function deleteUser (User $user)
    {
        $user->delete();
        return redirect()->route('users.listAllUsers');
//        var_dump($user);
    }
}
