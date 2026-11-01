<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Doctor>
 */
class DoctorFactory extends Factory
    {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Doctor::class;
    protected static ?string $password;

    public function definition ()
        {
        return [
            'name'              => $this->faker->name,
            'email'             => $this->faker->unique ()->safeEmail (),
            'email_verified_at' => now (),
            'appointments'      => $this->faker->randomElement (['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']),
            'password'          => static::$password ??= Hash::make ('password'), // password
            'phone'             => $this->faker->phoneNumber,
            'price'             => $this->faker->randomElement ([100, 200, 300, 400, 500]),
            'section_id'        => Section::all ()->random ()->id,
        ];
        }
    }
