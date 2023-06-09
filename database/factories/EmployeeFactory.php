<?php

namespace Database\Factories;

use App\Models\Division;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = explode(" ", $this->faker->name);
        return [
            'division_id'   => Division::factory(),
            'firstname' =>  $name[0],
            'lastname' => $name[1],
            'designation' => $this->faker->word(),
            'file_path' => $this->faker->image(public_path('images'),640,480, null, false),
        ];
    }
}
