<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class inspeccion extends Model
{
    use HasFactory;
    protected $table = 'inspecciones';
    protected $fillable =
    [
        'Nro_Sisco',
        'Tipo_Inspeccion',
        'Estado',
        'Fecha_Inspeccion',
        'Foto_Carta',
        'Inspeccion',
        'Observaciones',

        'users_id',
        'Distritos_id',
    ];
    protected $primarykey = 'id';
    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function distrito(): BelongsTo
    {
        return $this->belongsTo(distrito::class);
    }
}
