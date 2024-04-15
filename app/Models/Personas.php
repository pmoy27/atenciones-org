<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personas extends Model
{
    use HasFactory;
    public function atenciones()
    {
        return $this->hasMany(Atenciones::class, 'id_persona');
    }
    public function organizacion()
    {
        return $this->belongsTo(Organizacion::class, 'id_organizacion');
    }
}
