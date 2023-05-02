<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MeansOfReceivingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('means_of_receivings')->delete();
        
        \DB::table('means_of_receivings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Email',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hard Copy',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Internal',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
        ));
        
        
    }
}