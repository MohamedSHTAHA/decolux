<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Apply extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = ['firstname','lastname','email','phone','jop_id'];

    public function jop()
    {
        return $this->belongsTo('App\Jop');
    }}
