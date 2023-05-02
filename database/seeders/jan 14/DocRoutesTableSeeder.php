<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_routes')->delete();
        
        \DB::table('doc_routes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'document_id' => 1,
                'user_id' => 35,
                'remarks' => 'Forwarded toJerry Tizon',
                'created_at' => '2023-01-13 11:43:38',
                'updated_at' => '2023-01-13 11:43:38',
            ),
        ));
        
        
    }
}