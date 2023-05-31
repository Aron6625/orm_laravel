<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Session extends Model
{
    use HasFactory;
    protected $fillable = ['process_id'];
    public function users()
    {
        return $this->belongsTo(User::class);
    } 

}
