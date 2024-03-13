<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable =
    [
        'Nombre_de_Empresa',
        'Descripcion',
        'Cod_Proyecto',
        'Tipo_de_Componentes',
        'Fecha_de_proyecto'
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
}
