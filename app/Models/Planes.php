<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;

    protected $table = "planes";
    protected $primaryKey = "id_plan";
    public $incrementing = true;

    protected $fillable = [
        'plan',    
    ];
}
