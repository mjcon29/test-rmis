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
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 20:58:56',
                'updated_at' => '2022-12-20 20:58:56',
            ),
            1 => 
            array (
                'id' => 2,
                'document_id' => 1,
                'user_id' => 35,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 21:45:14',
                'updated_at' => '2022-12-20 21:45:14',
            ),
            2 => 
            array (
                'id' => 4,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 21:49:46',
                'updated_at' => '2022-12-20 21:49:46',
            ),
            3 => 
            array (
                'id' => 5,
                'document_id' => 1,
                'user_id' => 35,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 21:52:04',
                'updated_at' => '2022-12-20 21:52:04',
            ),
            4 => 
            array (
                'id' => 6,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 21:53:50',
                'updated_at' => '2022-12-20 21:53:50',
            ),
            5 => 
            array (
                'id' => 7,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 21:55:58',
                'updated_at' => '2022-12-20 21:55:58',
            ),
            6 => 
            array (
                'id' => 8,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:00:47',
                'updated_at' => '2022-12-20 22:00:47',
            ),
            7 => 
            array (
                'id' => 9,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:02:44',
                'updated_at' => '2022-12-20 22:02:44',
            ),
            8 => 
            array (
                'id' => 10,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:06:24',
                'updated_at' => '2022-12-20 22:06:24',
            ),
            9 => 
            array (
                'id' => 11,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:07:14',
                'updated_at' => '2022-12-20 22:07:14',
            ),
            10 => 
            array (
                'id' => 12,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:10:29',
                'updated_at' => '2022-12-20 22:10:29',
            ),
            11 => 
            array (
                'id' => 13,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:12:04',
                'updated_at' => '2022-12-20 22:12:04',
            ),
            12 => 
            array (
                'id' => 14,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:14:17',
                'updated_at' => '2022-12-20 22:14:17',
            ),
            13 => 
            array (
                'id' => 15,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:18:35',
                'updated_at' => '2022-12-20 22:18:35',
            ),
            14 => 
            array (
                'id' => 16,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:19:48',
                'updated_at' => '2022-12-20 22:19:48',
            ),
            15 => 
            array (
                'id' => 17,
                'document_id' => 1,
                'user_id' => 3,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:24:15',
                'updated_at' => '2022-12-20 22:24:15',
            ),
            16 => 
            array (
                'id' => 18,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:24:38',
                'updated_at' => '2022-12-20 22:24:38',
            ),
            17 => 
            array (
                'id' => 19,
                'document_id' => 1,
                'user_id' => 3,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:27:17',
                'updated_at' => '2022-12-20 22:27:17',
            ),
            18 => 
            array (
                'id' => 20,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 22:27:35',
                'updated_at' => '2022-12-20 22:27:35',
            ),
            19 => 
            array (
                'id' => 21,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:04:29',
                'updated_at' => '2022-12-21 21:04:29',
            ),
            20 => 
            array (
                'id' => 22,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:09:08',
                'updated_at' => '2022-12-21 21:09:08',
            ),
            21 => 
            array (
                'id' => 23,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:12:01',
                'updated_at' => '2022-12-21 21:12:01',
            ),
            22 => 
            array (
                'id' => 24,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:25:54',
                'updated_at' => '2022-12-21 21:25:54',
            ),
            23 => 
            array (
                'id' => 25,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:27:32',
                'updated_at' => '2022-12-21 21:27:32',
            ),
            24 => 
            array (
                'id' => 26,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:30:36',
                'updated_at' => '2022-12-21 21:30:36',
            ),
            25 => 
            array (
                'id' => 27,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:31:51',
                'updated_at' => '2022-12-21 21:31:51',
            ),
            26 => 
            array (
                'id' => 28,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:34:26',
                'updated_at' => '2022-12-21 21:34:26',
            ),
            27 => 
            array (
                'id' => 29,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:37:27',
                'updated_at' => '2022-12-21 21:37:27',
            ),
            28 => 
            array (
                'id' => 30,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:38:43',
                'updated_at' => '2022-12-21 21:38:43',
            ),
            29 => 
            array (
                'id' => 31,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:40:26',
                'updated_at' => '2022-12-21 21:40:26',
            ),
            30 => 
            array (
                'id' => 32,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:42:19',
                'updated_at' => '2022-12-21 21:42:19',
            ),
            31 => 
            array (
                'id' => 33,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 21:43:43',
                'updated_at' => '2022-12-21 21:43:43',
            ),
        ));
        
        
    }
}