<?php

namespace App;

use App\Models\Favorite;
use App\Models\Notification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    use HasApiTokens, Notifiable;
    protected $fillable = [
        'name', 'email', 'password','phone','points'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function favorites(){
        return $this->hasMany(Favorite::class,'user_id');
    }

    public function notifications(){
        return $this->hasMany(Notification::class,'user_id');
    }

}
