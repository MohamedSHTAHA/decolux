<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComments extends Model
{
    protected $fillable = ['news_id', 'comment','name','email','phone'];

    public function news()
    {
        return $this->belongsTo(News::class,'news_id','id');

    }//end fo news
}
