<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            1 => 
            array (
                'role_id' => 7,
                'user_id' => 1,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            2 => 
            array (
                'role_id' => 1,
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            3 => 
            array (
                'role_id' => 2,
                'user_id' => 3,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            4 => 
            array (
                'role_id' => 2,
                'user_id' => 4,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            5 => 
            array (
                'role_id' => 2,
                'user_id' => 5,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            6 => 
            array (
                'role_id' => 2,
                'user_id' => 6,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            7 => 
            array (
                'role_id' => 2,
                'user_id' => 7,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            8 => 
            array (
                'role_id' => 2,
                'user_id' => 8,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            9 => 
            array (
                'role_id' => 2,
                'user_id' => 9,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            10 => 
            array (
                'role_id' => 2,
                'user_id' => 10,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            11 => 
            array (
                'role_id' => 2,
                'user_id' => 11,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            12 => 
            array (
                'role_id' => 2,
                'user_id' => 12,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            13 => 
            array (
                'role_id' => 8,
                'user_id' => 12,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            14 => 
            array (
                'role_id' => 2,
                'user_id' => 13,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            15 => 
            array (
                'role_id' => 2,
                'user_id' => 14,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            16 => 
            array (
                'role_id' => 2,
                'user_id' => 15,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            17 => 
            array (
                'role_id' => 2,
                'user_id' => 16,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            18 => 
            array (
                'role_id' => 2,
                'user_id' => 17,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            19 => 
            array (
                'role_id' => 2,
                'user_id' => 18,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            20 => 
            array (
                'role_id' => 2,
                'user_id' => 19,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            21 => 
            array (
                'role_id' => 2,
                'user_id' => 20,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            22 => 
            array (
                'role_id' => 2,
                'user_id' => 21,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            23 => 
            array (
                'role_id' => 2,
                'user_id' => 22,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            24 => 
            array (
                'role_id' => 2,
                'user_id' => 23,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            25 => 
            array (
                'role_id' => 2,
                'user_id' => 24,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            26 => 
            array (
                'role_id' => 2,
                'user_id' => 25,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            27 => 
            array (
                'role_id' => 2,
                'user_id' => 26,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            28 => 
            array (
                'role_id' => 2,
                'user_id' => 27,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            29 => 
            array (
                'role_id' => 2,
                'user_id' => 28,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            30 => 
            array (
                'role_id' => 2,
                'user_id' => 29,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            31 => 
            array (
                'role_id' => 2,
                'user_id' => 30,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            32 => 
            array (
                'role_id' => 2,
                'user_id' => 31,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            33 => 
            array (
                'role_id' => 2,
                'user_id' => 32,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            34 => 
            array (
                'role_id' => 2,
                'user_id' => 33,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            35 => 
            array (
                'role_id' => 2,
                'user_id' => 34,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            36 => 
            array (
                'role_id' => 5,
                'user_id' => 35,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            37 => 
            array (
                'role_id' => 2,
                'user_id' => 36,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            38 => 
            array (
                'role_id' => 2,
                'user_id' => 38,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            39 => 
            array (
                'role_id' => 2,
                'user_id' => 40,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            40 => 
            array (
                'role_id' => 2,
                'user_id' => 41,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
            41 => 
            array (
                'role_id' => 2,
                'user_id' => 42,
                'user_type' => 'App\\Models\\User',
                'team_id' => NULL,
            ),
        ));
        
        
    }
}