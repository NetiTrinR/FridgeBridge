<?php

namespace Fridge;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = ['name', 'expire'];
    protected $dates = ['created_at', 'updated_at', 'expire'];

    public function users(){
        return $this->belongsToMany('Fridge\User')->withPivot(['quantity', 'measure'])->withTimestamps();
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }


}
