<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OriginOffice;
use App\Models\MeansOfReceiving;
use App\Models\DocType;
use App\Models\Employee;
use App\Models\User;

class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'origin_id' => rand(1,11),
            'mor_id' => rand(1,2),
            'doctype_id' => rand(1,7),
            'user_id' => rand(1,3),
            'date_received' => $this->faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d'),
            'status'   =>  0,
            'subject'   =>  $this->faker->sentence(),
            'deadline' => $this->faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d'),
            'required_action'   =>  $this->faker->sentence(),
        ];
    }
}
