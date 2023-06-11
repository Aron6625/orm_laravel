<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Image;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    function register(Request $request) {
        $data = $request->post();
        
        // guardar imagen
        // $file_path = $request->file('image')->path();
        $file = $request->file('imagen');
        $name =  $file->getClientOriginalName();
        $mime = $file->getClientMimeType();


        Image::create([
            'computadora_id' => 3,
            'name' => $name,
            'mime' => $mime,
            'image' => str_replace("''", "'", pg_escape_bytea(file_get_contents($file)))
        ]);
        $user = Computer::create(request(['nombre', 'marca','modelo','estado_id']));
    }

}
