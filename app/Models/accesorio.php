<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class accesorio extends Model
{
    use HasFactory;
    protected $table = 'accesorios';
    protected $fillable =
    [
        'Nombre_Item',
        'Cantidad',
        'Utilizados',
        'Disponibles',
        'Observaciones',
        'Proveedores_id'
    ];
    protected $primarykey = 'id';

    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(proveedor::class);
    }
    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(proyecto::class);
    }
    public function detalle(): BelongsTo
    {
        return $this->belongsTo(detalle::class);
    }
}
