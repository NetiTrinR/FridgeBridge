<?php

namespace Fridge;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $dates = ['created_at', 'updated_at', 'expire'];

    public function users(){
        return $this->belongsToMany('Fridge\User')->withPivot('quantity')->withTimestamps();
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
