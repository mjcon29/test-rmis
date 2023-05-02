<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_types')->delete();
        
        \DB::table('doc_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Memorandum',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'TESDA Circular',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TESDA Order',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Letter',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Memorandum Circular',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Advisory',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'TESDA Bulletin',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Travel Order',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Travel Authority',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Compensatory Time Off',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Application for Leave',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
        ));
        
        
    }
}