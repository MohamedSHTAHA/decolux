<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['title','logo','email','phone','web','address','website','facbook','twiter',
                           'linkedin','instgram','binterest','lat','long','discpriton','pdf','ourvision',
                           'Ourvendorsbrands','sliderimg1','sliderimg2','footerimg','phone2'];
}
