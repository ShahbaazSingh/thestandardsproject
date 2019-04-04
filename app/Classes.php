<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'class_id';
    public $timestamps = false;
    protected $fillable = [
        'subject','room'
    ];  

    public function users(){
        return $this->belongsToMany('App\User', 'class_user', 'class_id', 'user_id');
    }

}
