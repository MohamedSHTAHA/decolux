<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['user_id', 'title','description','image'];
        
    public function newsComments()
    {
        return $this->hasMany(NewsComments::class,'news_id','id');

    }//end of newsComments

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }//end fo users


}
