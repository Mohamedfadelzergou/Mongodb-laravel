<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Like extends Eloquent
{
    use HasFactory;
    protected $connection="mongodb";
    protected $fillable = [];
    public function likeable(){
        return $this->morphTo();
    }
    public function user(){
        return $this->belongsTo('App\Moedls\User','user_id');
    }
}
