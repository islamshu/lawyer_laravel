<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasTranslations;

    public $translatable = ['name','job_name'];
    protected $guarded=[];
}
