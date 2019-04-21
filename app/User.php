<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function classes(){
        return $this->belongsToMany('App\Classes', 'class_user', 'user_id', 'class_id');
    }

    public function proficiencies(){
        return $this->belongsToMany('App\Proficiency', 'user_proficiency', 'user_id', 'proficiency_id')->withPivot('grade');
    }

    public function modules(){
        return $this->belongsToMany('App\Module', 'user_module', 'user_id', 'module_id')->withPivot('grade','assigned','due','completed','report_link');
    }

}
