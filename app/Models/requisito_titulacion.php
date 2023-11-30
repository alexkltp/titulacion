<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requisito_titulacion extends Model
{
    use HasFactory;

    protected $table = "requisito_titulacion";
    protected $primaryKey = "id_requisito";
    public $incrementing = true;

    protected $fillable = [
        'descripcion_requisito',
        'id_opcion',
    ];
}
