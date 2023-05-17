<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_devolucion', 'fecha_prestamo'];
    public function computers()
    {
        return $this->belongsTo(Computer::class);
    } 

}
