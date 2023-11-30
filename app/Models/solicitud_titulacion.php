<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_titulacion extends Model
{
    use HasFactory;

    protected $table = "solicitud_titulacion";
    protected $primaryKey = "id_solicitud";
    public $incrementing = true;

    protected $fillable = [
        'estado_solicitud',
        'razon_rechazo',
        'fecha_solicitud',
        'user_id',
        'id_opcion',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function opcion(){
        return $this->belongsTo(opcion_titulacion::class, 'id_opcion', 'id_opcion');
    }
}
