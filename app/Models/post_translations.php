<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post_translations extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description'];
    
}
