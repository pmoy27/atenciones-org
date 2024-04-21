<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directiva extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'estado',
        'fecha_termino_directiva',
        'fecha_cambio',
        'id_vigencia',
        'id_organizacion'
    ];
}
