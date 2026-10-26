<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class posts extends Model implements TranslatableContract
{
     use Translatable;
     
     public $translatedAttributes = ['name', 'description'];
     protected $fillable = ['name','content'];
     protected $table = "posts";
    }
