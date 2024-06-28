<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urbanizacion extends Model
{

    use HasFactory;
    protected $table = "urbanizacion";
    protected $fillable = [
        'Nrodistrito',
        'nombre_urbanizacion',
        'lng',
        'lat'
    ];
    protected $primarykey = 'id';
}
