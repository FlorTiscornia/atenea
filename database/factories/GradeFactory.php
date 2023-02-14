<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $grades = User::all()->random()->id;
        return [
            'trimester' => $this->faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
            'subject' => $this->faker->name(),
            'exam' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 3),
            'year' => $this->faker->year($max = 'now'),
            'grade' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10),
            'idUser' => $grades,
        ];
    }
}
