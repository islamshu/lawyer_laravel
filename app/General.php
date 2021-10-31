<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class General extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded=[];
    public $translatedAttributes = ['title','decription'];

}
