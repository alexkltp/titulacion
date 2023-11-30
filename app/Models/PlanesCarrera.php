<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanesCarrera extends Model
{
    use HasFactory;

    protected $table = "planes_carreras";
    protected $primaryKey = "id_plan_carrera";
    public $incrementing = true;

    protected $fillable = [
        'id_plan',
        'carrera',
    ];
}
