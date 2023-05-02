<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'superadmin',
                'display_name' => 'Superadmin',
                'description' => 'Superadmin',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'administrator',
                'display_name' => 'Administrator',
                'description' => 'Administrator',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'guest',
                'display_name' => 'Guest',
                'description' => 'Guest',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'hrmo',
                'display_name' => 'Hrmo',
                'description' => 'Hrmo',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'records',
                'display_name' => 'Records',
                'description' => 'Records',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'return-clerk',
                'display_name' => 'Return-clerk',
                'description' => 'Return-clerk',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
        ));
        
        
    }
}