<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Image::class;
    public function definition()
    {

        return [
            'filename'       => $this->faker->randomElement (['Doctor_1.jpg', 'Doctor_2.jpg', 'Doctor_4.jpg', 'Doctor_4.jpg']),
            'imageable_id'   => Doctor::all ()->random ()->id,
            'imageable_type' => 'App\Models\Doctor',
        ];
    }
}
