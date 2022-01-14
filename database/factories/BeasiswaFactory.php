<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Beasiswa;

class BeasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Beasiswa::class;
    public function definition()
    {
        return [
            //
            'TITLE' => "Beasiswa" . $this->faker->city(),
            'NAME' => $this->faker->company(),
            'IMG_PATH' => 'https://source.unsplash.com/random',
            'DESC' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
