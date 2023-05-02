<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('offices')->delete();
        
        \DB::table('offices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'TESDA Regional Office Region VI',
                'short_name' => 'RO6',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Provincial Office - AKLAN',
                'short_name' => 'PO - AKLAN',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Provincial Office - ANTIQUE',
                'short_name' => 'PO - ANTIQUE',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Provincial Office - CAPIZ',
                'short_name' => 'PO - CAPIZ',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Provincial Office - GUIMARAS',
                'short_name' => 'PO - GUIMARAS',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Provincial Office - ILOILO',
                'short_name' => 'PO - ILOILO',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => 'PO - NEGROS OCCIDENTAL',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '',
                'short_name' => 'PLO',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '',
                'short_name' => 'PPO',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '',
                'short_name' => 'CLGUs',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '',
                'short_name' => 'NITESD',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '',
                'short_name' => 'ODG',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '',
                'short_name' => 'HRMD, AS',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '',
                'short_name' => 'ICTO',
                'created_at' => '2022-12-13 10:30:19',
                'updated_at' => '2022-12-13 10:30:19',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '',
                'short_name' => 'Romo',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '',
                'short_name' => 'TESDO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '',
                'short_name' => 'TDI',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '',
                'short_name' => 'IPO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '',
                'short_name' => 'GPO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '',
                'short_name' => 'CPO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '',
                'short_name' => 'ANPO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '',
                'short_name' => 'APO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '',
                'short_name' => 'TTIs',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '',
                'short_name' => 'NOPO',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '',
                'short_name' => 'TAS',
                'created_at' => '2022-12-13 10:30:20',
                'updated_at' => '2022-12-13 10:30:20',
            ),
        ));
        
        
    }
}