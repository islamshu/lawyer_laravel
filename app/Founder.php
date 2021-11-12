<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Founder extends Model
{
    use HasTranslations;

    public $translatable = ['title','desc'];
    protected $guarded=[];
}
