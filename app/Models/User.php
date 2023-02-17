<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Followable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute()
    {
        return "/images/user1.jpg?u=" . $this->email;
    }

    public function getAvatar1Attribute()
    {
        return "/images/user.jpg?u=" . $this->email;
    }

    public function toggleFollow(User $user)
    {
        if($this->isFollowing($user)){
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }

    public function timeline()
    {

        $friends = $this->follows()->pluck('id');

        return  Tweet::whereIn('user_id', $friends)
                ->orWhere('user_id', $this->id) 
                ->latest()->get();


     #   return  Tweet::where('user_id', $this->id)->latest()->get();

   /*  $ids = $this->follows()->pluck('id');
     $ids->push($this->id);

     return  Tweet::whereIn('user_id', $ids)->latest()->get();
    */
    }
    
    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

   
}
