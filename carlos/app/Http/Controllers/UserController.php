<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request) {
        $data = $request->post();

        /** @var ?User */
        $user = User::query()
            ->where('name', '=', $data['name'])
            ->where('password', '=', $data['password'])
            ->first();



        if(!is_null($user)) {
            // $sessions = $user->roles();    
            // dump($user->getAttribute('id'));
            Session::create([
                'process_id' => '3',
                'user_id' => $user->getAttribute('id'),
            ]);
        }

        return view('login');
    }

    function prestamos(Request $request){
        $data = $request->post();

        return view('prestamos');
    }
}
