<?php

namespace App\Observers;
use App\Models\Bitacora;
use App\Models\Prestamo;
use App\Models\User;

class PrestamoObserver
{
    public function created(Prestamo $prestamo)
    {
        $user = User::select(['id', 'name'])->find(session('user_id'));

        Bitacora::create([
            'accion' => 'INSERT',
            'datonuevo' => $prestamo->toJson(),
            'user' => $user->toJson(),
            'table' => 'prestamo',
            'fechaaccion' => new \DateTime()
        ]);
    }

}
