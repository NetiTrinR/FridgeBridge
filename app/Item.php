<?php

namespace Fridge;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Item extends Model
{

    protected $fillable = ['name', 'expire', 'category_id'];
    protected $dates = ['created_at', 'updated_at', 'expire'];

    public function users(){
        return $this->belongsToMany('Fridge\User')->withPivot(['quantity', 'measure'])->withTimestamps();
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function setExpireAttribute($value){
        $this->attributes['expire'] = Carbon::parse($value);
    }


}
