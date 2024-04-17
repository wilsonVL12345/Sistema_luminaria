<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class equipamiento extends Model
{
    use HasFactory;
    protected $table = 'equipamientos';
    protected $fillables =
    [
        'Nombre_Item',
        'Descripcion',
        'estado',
        'Distritos_id'
    ];
    protected $primarykey = 'id';
    public function distrito(): BelongsTo
    {
        return $this->belongsTo(distrito::class, 'Distritos_id');
    }
}
