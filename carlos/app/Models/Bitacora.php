<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $fillable = [
        'datonuevo',
        'dataviejo',
        'accion',
        'fechaaccion',
        'user',
        'table',
    ];
    public $timestamps = false;
}
