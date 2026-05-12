<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';

    protected $fillable = [
        'equipo_id',
        'nombre',
        'posicion',
        'numero',
        'edad'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}