<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class distrito extends Model
{
    use HasFactory;
    protected $table = 'distritos';
    protected $filable = [
        'Distrito',
        'Zona_Urbanizacion',
        'Calle_Avenida'
    ];
    protected $primarykey = 'id';
    public function equipamientos(): HasMany
    {
        return $this->HasMany(equipamiento::class);
    }
    public function proyectos(): HasMany
    {
        return $this->hasMany(proyecto::class);
    }
    public function detalles(): HasMany
    {
        return $this->hasMany(detalle::class);
    }
    public function inspecciones(): HasMany
    {
        return $this->hasMany(inspeccione::class);
    }
}
