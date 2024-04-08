<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    public function atenciones()
    {
        return $this->hasMany(Atenciones::class, 'id_persona');
    }
}
