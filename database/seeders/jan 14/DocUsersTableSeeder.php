<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_users')->delete();
        
        \DB::table('doc_users')->insert(array (
            0 => 
            array (
                'document_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}