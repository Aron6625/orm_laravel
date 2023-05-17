<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_user', 'password'];
    public function sessions(){
        return $this->hasMany(session::class);
    }

}
