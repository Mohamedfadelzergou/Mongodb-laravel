<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reply extends Eloquent
{
    use HasFactory;
    protected $connection="mongodb";
    protected $fillable = [
        'body',
    ];
    public function status(){
        return $this->belongsTo('App\Models\Status','status_id');
    }
    public function likes(){
        return $this->morphMany('App\Models\Like','likeable');
    }
}
