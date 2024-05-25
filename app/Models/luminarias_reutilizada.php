<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class luminarias_reutilizada extends Model
{
    use HasFactory;
    protected $table = 'Luminarias_Reutilizadas';
    protected $fillable =
    [
        'id',
        'Nombre_Item',
        'Cantidad',
        'Observaciones',
        'Proyectos_id'

    ];
    protected $primarykey = 'id';
    public function proyecto(): BelongsTo
    {
        return $this->belongsTo(proyecto::class);
    }
}
