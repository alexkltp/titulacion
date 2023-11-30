<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acto extends Model
{
    use HasFactory;

    protected $table = "actos";
    protected $primaryKey = "id_acto";
    public $incrementing = true;

    protected $fillable = [
        'fecha_acto',
        'sala',
        'id_solicitud',
    ];

    public function solicitudTitulacion()
{
    return $this->belongsTo(SolicitudTitulacion::class, 'id_solicitud')->onDelete('cascade');
}
}
