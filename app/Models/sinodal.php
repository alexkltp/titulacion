<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sinodal extends Model
{
    use HasFactory;

    protected $table = "sinodales";
    protected $primaryKey = "id_sinodal";
    public $incrementing = true;

    protected $fillable = [
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
