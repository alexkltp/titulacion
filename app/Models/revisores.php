<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revisores extends Model
{
    use HasFactory;

    protected $table = "revisores";
    protected $primaryKey = "id_revisor";
    public $incrementing = true;

    protected $fillable = [
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
