<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opcion_titulacion extends Model
{
    use HasFactory;

    protected $table = "opcion_titulacion";
    protected $primaryKey = "id_opcion";
    public $incrementing = true;

    protected $fillable = [
        'opcion',
        'id_plan',    
    ];

    public function plan(){
        return $this->belongsTo(Planes::class, 'id_plan', 'id_plan');
    }


}
