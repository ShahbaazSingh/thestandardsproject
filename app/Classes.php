<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    public $timestamps = false;
    protected $fillable = [
        'subject','room'                //fillables are useless but if you want to use eloquent, make sure you add it 
    ];                                  //with whatever parameters 

    public function users(){
        return $this->belongsToMany('App\User', 'class_user', 'class_id', 'user_id');       //this is a pivot relationship
    }

}
