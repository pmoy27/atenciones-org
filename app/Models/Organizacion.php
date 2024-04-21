<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Organizacion extends Model
{
    use HasFactory;
    protected $table = 'organizacions'; // Nombre de la tabla si es diferente

    public function tipo_Organizacion()
    {
        return $this->belongsTo(Tipo_organicacion::class, 'id_tipo');
    }
    public function directiva()
    {
        return $this->hasMany(Directiva::class, 'id_organizacion');
    }
    public function personas()
    {
        return $this->hasMany(Personas::class, 'id_organizacion');
    }
}
