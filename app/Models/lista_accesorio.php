<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lista_accesorio extends Model
{
    use HasFactory;
    protected $table = 'lista_accesorios';
    protected $fillable =
    [
        'Nombre_Item'
    ];
    protected $primarykey = 'id';
}
