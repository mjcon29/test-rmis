<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Document;
use App\Models\Division;
use App\Models\Employee;
use App\Models\User;

class DocRoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        $id = Document::inRandomOrder()->take(1)->pluck('id');
        return [
            'document_id' => $id[0],
            // 'action_id' => rand(1, 15),
            'remarks' => 'Sample remark ',
            'user_id' => rand(1, 4),
            
        ];
    }
}
