<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_user', 'password'];

    public function sessions(){
        return $this->hasMany(session::class);
    }

    public function roles(): HasManyThrough
    {
        return $this->hasManyThrough(rol::class, user_rol::class);
    }
}
