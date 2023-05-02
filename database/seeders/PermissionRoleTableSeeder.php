<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 8,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 2,
            ),
            6 => 
            array (
                'permission_id' => 2,
                'role_id' => 3,
            ),
            7 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            8 => 
            array (
                'permission_id' => 2,
                'role_id' => 5,
            ),
            9 => 
            array (
                'permission_id' => 2,
                'role_id' => 8,
            ),
            10 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 3,
                'role_id' => 2,
            ),
            12 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            13 => 
            array (
                'permission_id' => 3,
                'role_id' => 8,
            ),
            14 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 4,
                'role_id' => 2,
            ),
            16 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            17 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 5,
                'role_id' => 2,
            ),
            19 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            20 => 
            array (
                'permission_id' => 5,
                'role_id' => 5,
            ),
            21 => 
            array (
                'permission_id' => 5,
                'role_id' => 8,
            ),
            22 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            24 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            25 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            26 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            27 => 
            array (
                'permission_id' => 6,
                'role_id' => 6,
            ),
            28 => 
            array (
                'permission_id' => 6,
                'role_id' => 8,
            ),
            29 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 7,
                'role_id' => 2,
            ),
            31 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            32 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            33 => 
            array (
                'permission_id' => 7,
                'role_id' => 6,
            ),
            34 => 
            array (
                'permission_id' => 7,
                'role_id' => 8,
            ),
            35 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 9,
                'role_id' => 2,
            ),
            38 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            39 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            40 => 
            array (
                'permission_id' => 9,
                'role_id' => 8,
            ),
            41 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 10,
                'role_id' => 2,
            ),
            43 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            44 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            45 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            46 => 
            array (
                'permission_id' => 10,
                'role_id' => 6,
            ),
            47 => 
            array (
                'permission_id' => 10,
                'role_id' => 8,
            ),
            48 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            50 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            51 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            52 => 
            array (
                'permission_id' => 11,
                'role_id' => 6,
            ),
            53 => 
            array (
                'permission_id' => 11,
                'role_id' => 8,
            ),
            54 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 12,
                'role_id' => 2,
            ),
            56 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            57 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            58 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 13,
                'role_id' => 2,
            ),
            60 => 
            array (
                'permission_id' => 13,
                'role_id' => 3,
            ),
            61 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            62 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            63 => 
            array (
                'permission_id' => 13,
                'role_id' => 6,
            ),
            64 => 
            array (
                'permission_id' => 13,
                'role_id' => 8,
            ),
            65 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            67 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            68 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            69 => 
            array (
                'permission_id' => 14,
                'role_id' => 6,
            ),
            70 => 
            array (
                'permission_id' => 14,
                'role_id' => 8,
            ),
            71 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            73 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            75 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            76 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            77 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            78 => 
            array (
                'permission_id' => 16,
                'role_id' => 6,
            ),
            79 => 
            array (
                'permission_id' => 16,
                'role_id' => 8,
            ),
            80 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            82 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            84 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
            86 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 20,
                'role_id' => 2,
            ),
            88 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            89 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            90 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            91 => 
            array (
                'permission_id' => 20,
                'role_id' => 6,
            ),
            92 => 
            array (
                'permission_id' => 20,
                'role_id' => 8,
            ),
            93 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 21,
                'role_id' => 2,
            ),
            95 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            97 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            98 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            99 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 24,
                'role_id' => 2,
            ),
            101 => 
            array (
                'permission_id' => 24,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 24,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 24,
                'role_id' => 6,
            ),
            105 => 
            array (
                'permission_id' => 24,
                'role_id' => 8,
            ),
            106 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            107 => 
            array (
                'permission_id' => 25,
                'role_id' => 2,
            ),
            108 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 27,
                'role_id' => 2,
            ),
            111 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 28,
                'role_id' => 2,
            ),
            113 => 
            array (
                'permission_id' => 28,
                'role_id' => 3,
            ),
            114 => 
            array (
                'permission_id' => 28,
                'role_id' => 4,
            ),
            115 => 
            array (
                'permission_id' => 28,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 28,
                'role_id' => 6,
            ),
            117 => 
            array (
                'permission_id' => 28,
                'role_id' => 8,
            ),
            118 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 29,
                'role_id' => 2,
            ),
            120 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            122 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            123 => 
            array (
                'permission_id' => 32,
                'role_id' => 8,
            ),
            124 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 33,
                'role_id' => 8,
            ),
            126 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 34,
                'role_id' => 8,
            ),
            128 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            129 => 
            array (
                'permission_id' => 35,
                'role_id' => 8,
            ),
            130 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 36,
                'role_id' => 8,
            ),
        ));
        
        
    }
}