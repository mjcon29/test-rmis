<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_user')->delete();
        
        \DB::table('permission_user')->insert(array (
            0 => 
            array (
                'permission_id' => 34,
                'user_id' => 4,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            1 => 
            array (
                'permission_id' => 35,
                'user_id' => 4,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            2 => 
            array (
                'permission_id' => 6,
                'user_id' => 37,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            3 => 
            array (
                'permission_id' => 10,
                'user_id' => 37,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            4 => 
            array (
                'permission_id' => 13,
                'user_id' => 37,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            6 => 
            array (
                'permission_id' => 5,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            7 => 
            array (
                'permission_id' => 6,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            8 => 
            array (
                'permission_id' => 7,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            9 => 
            array (
                'permission_id' => 9,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            10 => 
            array (
                'permission_id' => 10,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            11 => 
            array (
                'permission_id' => 11,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            12 => 
            array (
                'permission_id' => 12,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            13 => 
            array (
                'permission_id' => 13,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            14 => 
            array (
                'permission_id' => 14,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
        ));
        
        
    }
}