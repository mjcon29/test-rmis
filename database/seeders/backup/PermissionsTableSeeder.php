<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users-create',
                'display_name' => 'Create Users',
                'description' => 'Create Users',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'users-read',
                'display_name' => 'Read Users',
                'description' => 'Read Users',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'users-update',
                'display_name' => 'Update Users',
                'description' => 'Update Users',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'users-delete',
                'display_name' => 'Delete Users',
                'description' => 'Delete Users',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'documents-create',
                'display_name' => 'Create Documents',
                'description' => 'Create Documents',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'documents-read',
                'display_name' => 'Read Documents',
                'description' => 'Read Documents',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'documents-update',
                'display_name' => 'Update Documents',
                'description' => 'Update Documents',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'documents-delete',
                'display_name' => 'Delete Documents',
                'description' => 'Delete Documents',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'routes-create',
                'display_name' => 'Create Routes',
                'description' => 'Create Routes',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'routes-read',
                'display_name' => 'Read Routes',
                'description' => 'Read Routes',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'routes-update',
                'display_name' => 'Update Routes',
                'description' => 'Update Routes',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'routes-delete',
                'display_name' => 'Delete Routes',
                'description' => 'Delete Routes',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'profile-read',
                'display_name' => 'Read Profile',
                'description' => 'Read Profile',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'profile-update',
                'display_name' => 'Update Profile',
                'description' => 'Update Profile',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'divisions-create',
                'display_name' => 'Create Divisions',
                'description' => 'Create Divisions',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'divisions-read',
                'display_name' => 'Read Divisions',
                'description' => 'Read Divisions',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'divisions-update',
                'display_name' => 'Update Divisions',
                'description' => 'Update Divisions',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'divisions-delete',
                'display_name' => 'Delete Divisions',
                'description' => 'Delete Divisions',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'employees-create',
                'display_name' => 'Create Employees',
                'description' => 'Create Employees',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'employees-read',
                'display_name' => 'Read Employees',
                'description' => 'Read Employees',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'employees-update',
                'display_name' => 'Update Employees',
                'description' => 'Update Employees',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'employees-delete',
                'display_name' => 'Delete Employees',
                'description' => 'Delete Employees',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'means_of_receivings-create',
                'display_name' => 'Create Means_of_receivings',
                'description' => 'Create Means_of_receivings',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'means_of_receivings-read',
                'display_name' => 'Read Means_of_receivings',
                'description' => 'Read Means_of_receivings',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'means_of_receivings-update',
                'display_name' => 'Update Means_of_receivings',
                'description' => 'Update Means_of_receivings',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'means_of_receivings-delete',
                'display_name' => 'Delete Means_of_receivings',
                'description' => 'Delete Means_of_receivings',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'origin_offices-create',
                'display_name' => 'Create Origin_offices',
                'description' => 'Create Origin_offices',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'origin_offices-read',
                'display_name' => 'Read Origin_offices',
                'description' => 'Read Origin_offices',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'origin_offices-update',
                'display_name' => 'Update Origin_offices',
                'description' => 'Update Origin_offices',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'origin_offices-delete',
                'display_name' => 'Delete Origin_offices',
                'description' => 'Delete Origin_offices',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
        ));
        
        
    }
}