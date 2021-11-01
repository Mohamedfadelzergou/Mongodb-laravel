<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class User extends Eloquent implements AuthenticatableContract
{
    use HasApiTokens, HasFactory, Notifiable , AuthenticableTrait;
    protected $connection="mongodb";
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'date',
        'localisation',
        'gender',
        'password',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAvatarUrl(){
        return "https://www.gravatar.com/avatar/".md5($this->email)."?d=identicon";
    }
    public function statuses(){
        return $this->hasMany('App\Models\Status','user_id');
    }
    public function likes(){
       return $this->hasMany('App\Models\Like','user_id');
    }
    public function friendsOfMine(){
        return $this->belongsToMany('App\Models\Friend','friends','user_id','friend_id');
    }
    public function friendsOf(){
        return $this->belongsToMany('App\Models\User','friends','friend_id','user_id');
    }
    // public function friends(){
    //     return $this->friendsOfMine()->wherePivot('accepted',true)->get()->merge($this->friendsOf()->wherePivot('accepted',true)->get());
    // }
    public function friends(){
        return $this->hasMany('App\Models\Friend','user_id');
    }
    public function friendRequest(){
        return $this->friendsOfMine()->wherePivot('accepted',false)->get();
    }
    public function friendRequestPending(){
        return $this->friendsOf()->wherePivot('accepted',false)->get();
    }
    public function hasFriendRequestPending(User $user){
        return (bool) $this->friendRequestPending()->where('id',$user->id)->count();
    }
    public function hasFriendRequestReceived(User $user){
        return (bool) $this->friendRequest()->where('id',$user->id)->count();
    }
    public function addFriend(User $user){
        $this->friendOf()->attach($user->id);
    }
    public function acceptFriendRequest(User $user){
        $this->friendRequest()->where('id',$user->id)->first()->pivot->update(['accepted'=>true]);
    }
    public function isFriendsWith(User $user){
        return (bool) $this->friends()->where('id',$user->id)->count();
    }
    public function hasLikedStatus(Status $status){
     return (bool) $status->likes()->where('likeable_id',$status->id)->where('likeable_type',get_class($status))->where('user_id',$this->id)->count();  
    }
}
