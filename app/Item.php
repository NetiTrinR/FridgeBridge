<?php

namespace Fridge;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function users(){
        return $this->belongsToMany('Fridge\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
