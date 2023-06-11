<?php

namespace App\Observers;

use App\Models\Bitacora;
use App\Models\Computer;
use App\Models\User;

class ComputerObserver
{
    /**
     * Handle the Computer "created" event.
     *
     * @param  \App\Models\Computer  $computer
     * @return void
     */
    public function created(Computer $computer)
    {
        $user = User::select(['id', 'name'])->find(session('user_id'));

        Bitacora::create([
            'accion' => 'INSERT',
            'datonuevo' => $computer->toJson(),
            'usern' => $user->toJson(),
            'table' => 'computadoras',
            'fechaaccion' => new \DateTime()
        ]);
    }

    /**
     * Handle the Computer "updated" event.
     *
     * @param  \App\Models\Computer  $computer
     * @return void
     */
    public function updated(Computer $computer)
    {
    }

    /**
     * Handle the Computer "deleted" event.
     *
     * @param  \App\Models\Computer  $computer
     * @return void
     */
    public function deleted(Computer $computer)
    {
        //
    }
}
