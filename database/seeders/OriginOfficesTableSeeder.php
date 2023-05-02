<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OriginOfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('origin_offices')->delete();
        
        \DB::table('origin_offices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'TESDA Regional Office Region VI',
                'short_name' => 'RO6',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Provincial Office - AKLAN',
                'short_name' => 'PO - AKLAN',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Provincial Office - ANTIQUE',
                'short_name' => 'PO - ANTIQUE',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Provincial Office - CAPIZ',
                'short_name' => 'PO - CAPIZ',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Provincial Office - GUIMARAS',
                'short_name' => 'PO - GUIMARAS',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Provincial Office - ILOILO',
                'short_name' => 'PO - ILOILO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => 'PO - NEGROS OCCIDENTAL',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'PLO',
                'short_name' => 'PLO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'PPO',
                'short_name' => 'PPO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CLGUs',
                'short_name' => 'CLGUs',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'NITESD',
                'short_name' => 'NITESD',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ODG',
                'short_name' => 'ODG',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'HRMD, AS',
                'short_name' => 'HRMD, AS',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'ICTO',
                'short_name' => 'ICTO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Romo',
                'short_name' => 'Romo',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'TESDO',
                'short_name' => 'TESDO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'TDI',
                'short_name' => 'TDI',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'IPO',
                'short_name' => 'IPO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'GPO',
                'short_name' => 'GPO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'CPO',
                'short_name' => 'CPO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'ANPO',
                'short_name' => 'ANPO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'APO',
                'short_name' => 'APO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'TTIs',
                'short_name' => 'TTIs',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'NOPO',
                'short_name' => 'NOPO',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'TAS',
                'short_name' => 'TAS',
                'created_at' => '2022-12-13 10:30:42',
                'updated_at' => '2022-12-13 10:30:42',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'The Deputy Director General for Policies and Planning',
                'short_name' => NULL,
                'created_at' => '2022-12-13 10:34:52',
                'updated_at' => '2022-12-13 10:34:52',
            ),
            26 => 
            array (
                'id' => 27,
            'name' => 'The Executive Director (Certification Office)',
                'short_name' => NULL,
                'created_at' => '2022-12-14 12:32:16',
                'updated_at' => '2022-12-14 12:32:16',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Provincial Office - AKLAN',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:04:13',
                'updated_at' => '2022-12-15 09:04:13',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:08:26',
                'updated_at' => '2022-12-15 09:08:26',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:09:49',
                'updated_at' => '2022-12-15 09:09:49',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:10:36',
                'updated_at' => '2022-12-15 09:10:36',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Provincial Office - ANTIQUE',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:11:38',
                'updated_at' => '2022-12-15 09:11:38',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'ODG',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:12:44',
                'updated_at' => '2022-12-15 09:12:44',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Regional Training Center Iloilo',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:13:59',
                'updated_at' => '2022-12-15 09:13:59',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:15:45',
                'updated_at' => '2022-12-15 09:15:45',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:16:39',
                'updated_at' => '2022-12-15 09:16:39',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'LGPC',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:18:38',
                'updated_at' => '2022-12-15 09:18:38',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'PTC Cadiz',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:27:09',
                'updated_at' => '2022-12-15 09:27:09',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'PTC Cadiz',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:28:23',
                'updated_at' => '2022-12-15 09:28:23',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'St. Gabriel College, Inc.',
                'short_name' => NULL,
                'created_at' => '2022-12-15 09:30:32',
                'updated_at' => '2022-12-15 09:30:32',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Provincial Office - ILOILO',
                'short_name' => NULL,
                'created_at' => '2022-12-15 10:27:18',
                'updated_at' => '2022-12-15 10:27:18',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Caritas Health Shield',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:11:25',
                'updated_at' => '2022-12-15 11:11:25',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'DBM',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:13:11',
                'updated_at' => '2022-12-15 11:13:11',
            ),
            43 => 
            array (
                'id' => 44,
            'name' => 'FASD (Ms.Alva)',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:14:45',
                'updated_at' => '2022-12-15 11:14:45',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'The Deputy Director General for Policies and Planning',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:26:02',
                'updated_at' => '2022-12-15 11:26:02',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Provincial Office - ANTIQUE',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:27:18',
                'updated_at' => '2022-12-15 11:27:18',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Provincial Office - ILOILO',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:28:25',
                'updated_at' => '2022-12-15 11:28:25',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Provincial Office - NEGROS OCCIDENTAL',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:29:14',
                'updated_at' => '2022-12-15 11:29:14',
            ),
            48 => 
            array (
                'id' => 49,
            'name' => 'TESDA Regional Office Region VI (ROD)',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:30:27',
                'updated_at' => '2022-12-15 11:30:27',
            ),
            49 => 
            array (
                'id' => 50,
            'name' => 'Office of the Mayor (Municipality of Batad)',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:49:57',
                'updated_at' => '2022-12-15 11:49:57',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Provincial Office - CAPIZ',
                'short_name' => NULL,
                'created_at' => '2022-12-15 11:52:33',
                'updated_at' => '2022-12-15 11:52:33',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Orchard Valley Inc.',
                'short_name' => NULL,
                'created_at' => '2022-12-15 17:00:16',
                'updated_at' => '2022-12-15 17:00:16',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Leon Ganzon Polytechnic College',
                'short_name' => NULL,
                'created_at' => '2022-12-15 17:10:47',
                'updated_at' => '2022-12-15 17:10:47',
            ),
            53 => 
            array (
                'id' => 54,
            'name' => 'TESDA Regional Office Region VI (FASD)',
                'short_name' => NULL,
                'created_at' => '2022-12-16 10:30:16',
                'updated_at' => '2022-12-16 10:30:16',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Provincial Office - AKLAN',
                'short_name' => NULL,
                'created_at' => '2022-12-16 11:21:01',
                'updated_at' => '2022-12-16 11:21:01',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Provincial Office - ILOILO',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:33:21',
                'updated_at' => '2022-12-16 15:33:21',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Provincial Office - ANTIQUE',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:35:53',
                'updated_at' => '2022-12-16 15:35:53',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Provincial Office - ANTIQUE',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:38:19',
                'updated_at' => '2022-12-16 15:38:19',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'NLPC',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:40:56',
                'updated_at' => '2022-12-16 15:40:56',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'PTC Hamtic',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:42:43',
                'updated_at' => '2022-12-16 15:42:43',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'PTC Iloilo',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:43:55',
                'updated_at' => '2022-12-16 15:43:55',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'PTC Guimaras',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:45:28',
                'updated_at' => '2022-12-16 15:45:28',
            ),
            62 => 
            array (
                'id' => 63,
            'name' => 'TESDA Regional Office Region VI (FASD)',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:48:36',
                'updated_at' => '2022-12-16 15:48:36',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'NLPC',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:49:19',
                'updated_at' => '2022-12-16 15:49:19',
            ),
            64 => 
            array (
                'id' => 65,
            'name' => 'TESDA Regional Office Region VI (FASD)',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:50:00',
                'updated_at' => '2022-12-16 15:50:00',
            ),
            65 => 
            array (
                'id' => 66,
            'name' => 'TESDA Regional Office Region VI (FASD)',
                'short_name' => NULL,
                'created_at' => '2022-12-16 15:51:06',
                'updated_at' => '2022-12-16 15:51:06',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'RTC-Talisay',
                'short_name' => NULL,
                'created_at' => '2022-12-16 17:04:26',
                'updated_at' => '2022-12-16 17:04:26',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'others',
                'short_name' => NULL,
                'created_at' => '2022-12-19 12:41:06',
                'updated_at' => '2022-12-19 12:41:06',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Supplier - Technosure',
                'short_name' => NULL,
                'created_at' => '2022-12-19 12:43:39',
                'updated_at' => '2022-12-19 12:43:39',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Department of Budget and Management',
                'short_name' => NULL,
                'created_at' => '2022-12-19 12:44:29',
                'updated_at' => '2022-12-19 12:44:29',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'DVTS',
                'short_name' => NULL,
                'created_at' => '2022-12-19 15:21:54',
                'updated_at' => '2022-12-19 15:21:54',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Central Office',
                'short_name' => NULL,
                'created_at' => '2022-12-20 16:23:40',
                'updated_at' => '2022-12-20 16:23:40',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Passi Trade School',
                'short_name' => NULL,
                'created_at' => '2022-12-21 16:42:22',
                'updated_at' => '2022-12-21 16:42:22',
            ),
        ));
        
        
    }
}