<?php

namespace Database\Factories;

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
        return [
            //
            'trimester'=>$this->faker->biasedNumberBetween($min = 1, $max= 4, $function = 'sqrt'),,
            'subject'=>fake()->name(),
            'exam'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 5)
            'year'=>
            'grade'=>
            
    
        
        ];
    }
}
