<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesDetails extends Model
{
    protected $fillable = ['services_id', 'description','image','fadetype'];

    public function services()
    {
        return $this->belongsTo(Services::class,'services_id','id');

    }//end fo Services
}
