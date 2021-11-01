<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Status extends Eloquent
{
    use HasFactory;
    protected $connection="mongodb";
    protected $fillable = [
        'body',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function scopeNotReply($query){
        return $query->whereNull('parent_id');
    }
    public function replies(){
        return $this->hasMany('App\Models\Reply','status_id');
    }
    public function likes(){
        return $this->morphMany('App\Models\Like','likeable');
    }
}
