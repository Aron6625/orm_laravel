<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'marca','modelo','estado_id'];
    public $timestamps = false;
    public function prestamos(){
        return $this->hasMany(Prestamo::class);
    }

}
