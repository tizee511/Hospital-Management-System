<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors      = Doctor::factory ()->count (30)->create ();
        $Appointments = Appointment::all ()->random ()->id;

        foreach ($doctors as $doctor)
            {
            $doctor->doctorappointments ()->attach ($Appointments);
            }
    }
}
