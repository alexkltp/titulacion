<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinodales_solicitud extends Model
{
    use HasFactory;

    protected $table = "sinodales_solicitud";
    protected $primaryKey = "id_sinodal_solicitud";
    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'id_solicitud',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
