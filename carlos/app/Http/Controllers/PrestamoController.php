<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Prestamo;
use App\Models\User;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $estudiantes = User::join('user_rols AS ur', 'ur.user_id', '=', 'users.id')
            ->where('ur.id', '=', 1)
            ->get(['users.id', 'users.name']);
        $profesores = User::join('user_rols AS ur', 'ur.user_id', '=', 'users.id')
            ->where('ur.id', '=', 2)
            ->get(['users.id', 'users.name']);
        $computers = Computer::all();
        return view('prestamos',["computadoras"=>$computers,"profesores"=>$profesores,"estudiantes"=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $prestamo = Prestamo::create(request(['fecha_devolucion', 'fecha_prestamo','computer_id','estudiante_id','profesor_id']));
        return redirect("/prestamos");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->post();

        error_log(json_encode($data));

        return view('login'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
