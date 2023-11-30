<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revision extends Model
{
    use HasFactory;

    protected $table = "revisiones";
    protected $primaryKey = "id_revision";
    public $incrementing = true;

    protected $fillable = [
        'estado_revision',
        'observaciones',
        'user_id',
        'id_solicitud',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
