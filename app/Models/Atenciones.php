<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Atenciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'detalle_atencion',
        'fecha_antencion',
        'id_usuario',
        'id_persona',
        'tipo_atencion'
    ];

    public function atenciones(): HasMany
    {
        return $this->hasMany(self::class);
    }
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function tipos(): BelongsTo
    {
        return $this->belongsTo(Tipos::class, 'tipo_atencion');
    }
}
