<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('divisions')->delete();
        
        \DB::table('divisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ORD',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ROD',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'FASD',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BUDGET',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'HRMO',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'PSU',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'RTC-ILOILO',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'RECORDS',
                'created_at' => '2022-12-13 10:30:18',
                'updated_at' => '2022-12-13 10:30:18',
            ),
        ));
        
        
    }
}