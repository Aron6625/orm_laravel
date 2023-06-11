<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function index(Request $request) {
        if(!is_null(session('user_id'))) {
            return redirect('/');
        }

        return view('login');
    }

    function login(Request $request) {
        $data = $request->post();
        
        // guardar imagen
        // $file_path = $request->file('image')->path();
        // $name =  $file->getClientOriginalName();
        // $mime = $file->getClientMimeType();


        // Image::create([
        //     'computadora_id' => 3,
        //     'name' => $name,
        //     'mime' => $name,
        //     'image' => str_replace("''", "'", pg_escape_bytea(file_get_contents($file_path)))
        // ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $userInferfaces = User::join('user_rols AS ur', 'ur.user_id', '=', 'users.id')
            ->join('funcion_rol AS fr', 'fr.rol_id', '=', 'ur.rol_id')
            ->join('funcion_ui AS fu', 'fu.funcion_id', '=', 'fr.funcion_id')
            ->join('u_i_s AS u', 'u.id', '=', 'fu.ui_id')
            ->where('users.name', '=', $data['name'])
            ->where('users.password', '=', $data['password'])
            ->get(['users.id', 'u.nombre']);

        if(!empty($userInferfaces->all())) {
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
                'process_id' => '1',
                'user_id' => $userId,
            ]);

            return redirect('/');
        } else {
            return view('login');
        }
    }

    function images(Request $request){
        $file = Image::find(3); 
        // dump($file->image);
        $name = 'test.png';
        $name = $file->name;
        file_put_contents($name , stream_get_contents($file->image));

        $headers = array(
            // "Content-Type: {$file->mime}",
            "Content-Type: d",
        );
        // return view('login');

        return response()->download($name, $name, $headers)->deleteFileAfterSend(true);
    }
}