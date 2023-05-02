<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actions')->delete();
        
        \DB::table('actions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'For Information/File',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'For Appropriate Action',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'For Review and Recommendation',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'For CSW',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Endorse to CO',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Handle this',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'See Me',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            7 => 
            array (
                'id' => 8,
            'name' => 'For E-Copy (One Note)',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'For Dessimenation',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'For Follow-up',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Represent Me',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Assign this',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'For Calendar',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Remind Me',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Set a meeting',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Approved',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Forwarded to',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'For Approval/Signature',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Other',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'For Action',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'See Remarks for details',
                'created_at' => '2022-12-20 20:48:46',
                'updated_at' => '2022-12-20 20:48:46',
            ),
        ));
        
        
    }
}