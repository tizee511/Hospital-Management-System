<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Get the parent imageable model (user or post).
    use HasFactory;
    public function imageable ()
    {
        return $this->morphTo ();
    }
}
