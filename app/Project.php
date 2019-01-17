<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function images(){
        return $this->hasMany('App\Image');    
    }
    
    public function locations(){
        return $this->hasOne('App\Location');
    }
}
