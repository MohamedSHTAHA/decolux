<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{
    protected $fillable = ['title','description','user_id','country_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function types()
    {
        return $this->belongsToMany('App\Type');
        //return $this->belongsToMany('App\Type','jop_type','jop_id','type_id');                 

    }
}
