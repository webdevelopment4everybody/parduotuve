<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function getImages(){
        return $this->hasMany('App\Image', 'product_id','id');
    }
}
