<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(Request $request) {
        $data = $request->post();

        $user = User::select()
            ->first();

        /** @var array */
        $userInferfaces = User::join('user_rols AS ur', 'ur.user_id', '=', 'users.id')
                ->join('funcion_rol AS fr', 'fr.rol_id', '=', 'ur.rol_id')
                ->join('funcion_ui AS fu', 'fu.funcion_id', '=', 'fr.funcion_id')
                ->join('u_i_s AS u', 'u.id', '=', 'fu.ui_id')
                ->where('users.name', '=', $data['name'])
                ->where('users.password', '=', $data['password'])
                ->get(['users.id', 'u.nombre']);

        if(!is_null($user)) {
            $uiList = [];
            $userId = '1';
            
            foreach($userInferfaces  as $item) {
                $uiList[] = $item->getAttribute('nombre');

                $userId = $item->getAttribute('id');
            }

            session([
                'user_id' => $userId,
                'iterfaces' => $uiList, 
            ]);

            Session::create([
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
