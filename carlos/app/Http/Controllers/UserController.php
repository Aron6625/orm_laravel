<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request) {
        $data = $request->post();

        /** @var User */
        $user = User::query()
            ->where('name', '=', $data['name'])
            ->where('password', '=', $data['password'])
            ->first();

        $sessions = $user->sessions();
        
        dump($sessions);

        return view('login');
    }
    function prestamos(){
//        $data = $request->post();
        return view('prestamos');
    }
}
