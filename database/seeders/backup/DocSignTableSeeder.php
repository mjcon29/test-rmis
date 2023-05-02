<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocSignTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_sign')->delete();
        
        \DB::table('doc_sign')->insert(array (
            0 => 
            array (
                'id' => 34,
                'document_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}