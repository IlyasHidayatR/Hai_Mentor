<?php

namespace Database\Factories;
use App\Models\Karir;
use Illuminate\Database\Eloquent\Factories\Factory;

class KarirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Karir::class;
    public function definition()
    {
        return [
            //
            'TITLE' => $this->faker->jobTitle(),
            'NAME' => $this->faker->company(),
            'LOCATION' => $this->faker->city(),
            'END_DATE' => now(),
            'IMG_PATH' => 'https://source.unsplash.com/random',
            'DESC' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
