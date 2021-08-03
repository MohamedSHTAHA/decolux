<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = ['user_id', 'name','image','menue_name'];
        
    public function servicesDetails()
    {
        return $this->hasMany(ServicesDetails::class,'services_id','id');

    }//end of ServicesDetails

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }//end fo users
}
