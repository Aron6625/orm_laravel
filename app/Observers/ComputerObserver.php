<?php

namespace App\Observers;

use App\Models\Computer;

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
        $user = $_SESSION['user_id'];
        //
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
