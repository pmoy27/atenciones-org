<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;
    public function personas()
    {
        return $this->hasMany(Personas::class, 'id_organizacion');
    }
}
