<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $primaryKey = 'module_id';
    public $timestamps = false;
    protected $fillable = [
        'subject','type'
    ];  
}
