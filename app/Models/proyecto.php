<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';
    protected $fillable =
    [
        'Cuce_Cod',
        'Tipo_Contratacion',
        'Estado',
        'Subasta',
        'Modalidad',
        'Objeto_Contratacion',
        'Tipo_Componentes',
        'Ejecutado_Por',
        'Fecha_Hora_Inicio_Programado',
        'Fecha_Hora_Fin_Programado',
        'Fecha_Hora_Inicio',
        'Fecha_Hora_Fin',
        'Observaciones',

        'Accesorios_id',
        'Luminarias_id',
        'Luminarias_Reutilizadas_id',
        'Users_id',
        'Distritos_id'
    ];
    protected $primarykey = 'id';
    public function accesorios(): HasMany
    {
        return $this->hasMany(accesorio::class);
    }
    public function luminarias(): HasMany
    {
        return $this->hasMany(luminaria::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function luminarias_reutilizadas(): HasMany
    {
        return $this->hasMany(luminarias_reutilizada::class);
    }
    public function distrito(): BelongsTo
    {
        return $this->belongsTo(distrito::class);
    }
}
