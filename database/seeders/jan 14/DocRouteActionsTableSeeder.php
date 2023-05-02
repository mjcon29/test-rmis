<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocRouteActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_route_actions')->delete();
        
        \DB::table('doc_route_actions')->insert(array (
            0 => 
            array (
                'doc_routes_id' => 1,
                'action_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}