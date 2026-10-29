<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Section>
 */
class SectionFactory extends Factory
{
    protected $model = Section::class;
    public function definition()
    {
        return [
            'name'        => $this->faker->unique ()->randomElement (['قسم المخ والاعصاب', 'قسم الجراحة', 'قسم الاطفال', 'قسم النساء والتوليد', 'قسم العيون', 'قسم الباطنة']),
            'description' => $this->faker->paragraph
        ];
    }
}
