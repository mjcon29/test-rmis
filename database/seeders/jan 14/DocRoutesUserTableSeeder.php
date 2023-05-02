<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocRoutesUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_routes_user')->delete();
        
        \DB::table('doc_routes_user')->insert(array (
            0 => 
            array (
                'doc_routes_id' => 1,
                'user_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}