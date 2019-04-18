<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{
    public $table = 'proficiency';
    public $timestamps = false;
    protected $fillable = [
        'w','x','y','z'
    ]; 
}
