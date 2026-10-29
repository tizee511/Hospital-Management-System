<?php

namespace App\Models;

use App\Models\Appointment;
use App\Models\Image;
use App\Models\Section;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['name', 'appointments'];
    public $fillable             = ['email', 'email_verified_at', 'password', 'phone', 'name', 'section_id'];
    //protected $guarded=[];

    /**
     * Get the Doctor's image.
     */
    public function image ()
    {
        return $this->morphOne (Image::class, 'imageable');
    }

    // One To One get section of Doctor
    public function section ()
    {
        return $this->belongsTo (Section::class);
    }

    public function doctorappointments ()
        {
        return $this->belongsToMany (Appointment::class, 'appointment_doctor');
        }
}
