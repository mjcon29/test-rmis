<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('documents')->delete();
        
        \DB::table('documents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'doc_number' => 'TN-2023-01-13-0001',
                'memo_number' => NULL,
                'origin_id' => 1,
                'mor_id' => 1,
                'doctype_id' => 1,
                'user_id' => 35,
                'date_received' => '2023-01-13',
                'status' => 0,
                'subject' => 'test 1',
                'deadline' => '2023-01-16',
                'created_at' => '2023-01-13 11:43:37',
                'updated_at' => '2023-01-13 11:43:37',
            ),
        ));
        
        
    }
}