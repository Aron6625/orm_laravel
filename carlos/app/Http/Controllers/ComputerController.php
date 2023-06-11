<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\estado;
use App\Models\Image;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    function register(Request $request) {
        $file = $request->file('imagen');
        $name =  $file->getClientOriginalName();
        $mime = $file->getClientMimeType();

        $computer = Computer::create(request(['nombre', 'marca','modelo','estado_id']));

        Image::create([
            'computadora_id' => $computer->getAttribute('id'),
            'name' => $name,
            'mime' => $mime,
            'image' => str_replace("''", "'", pg_escape_bytea(file_get_contents($file)))
        ]);

        $estados = estado::all();
        return view('computer_register',["estados" => $estados]);
    }

}
