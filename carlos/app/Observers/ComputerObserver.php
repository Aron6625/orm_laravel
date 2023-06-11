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
        $user = session("user_id");
        User::find($user);
        Bitacora::create([
                'process_id' => '1',
                'user_id' => $userId,
            ]);
        //
        $file = $request->file('image')
    }

    /**
     * Handle the Computer "updated" event.
     *
     * @param  \App\Models\Computer  $computer
     * @return void
     */
    public function updated(Computer $computer)
    {
        // $computer->getChanges(); // to get old data
        
        //
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
