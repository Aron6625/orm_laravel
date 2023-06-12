<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_devolucion', 'fecha_prestamo','computer_id','profesor_id','estudiante_id'];

    public $timestamps = false;
    public function computers()
    {
        return $this->belongsTo(Computer::class);
    } 

}
