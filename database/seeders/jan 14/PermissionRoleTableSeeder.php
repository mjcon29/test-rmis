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
                'permission_id' => 2,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 2,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 3,
            ),
            6 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            7 => 
            array (
                'permission_id' => 2,
                'role_id' => 5,
            ),
            8 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 3,
                'role_id' => 2,
            ),
            10 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            11 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 4,
                'role_id' => 2,
            ),
            13 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            14 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 5,
                'role_id' => 2,
            ),
            16 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            17 => 
            array (
                'permission_id' => 5,
                'role_id' => 5,
            ),
            18 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 6,
                'role_id' => 2,
            ),
            20 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            21 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            22 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            23 => 
            array (
                'permission_id' => 6,
                'role_id' => 6,
            ),
            24 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 7,
                'role_id' => 2,
            ),
            26 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            27 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            28 => 
            array (
                'permission_id' => 7,
                'role_id' => 6,
            ),
            29 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 9,
                'role_id' => 2,
            ),
            32 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            33 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            34 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 10,
                'role_id' => 2,
            ),
            36 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            37 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            38 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            39 => 
            array (
                'permission_id' => 10,
                'role_id' => 6,
            ),
            40 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 11,
                'role_id' => 2,
            ),
            42 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            43 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            44 => 
            array (
                'permission_id' => 11,
                'role_id' => 6,
            ),
            45 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 12,
                'role_id' => 2,
            ),
            47 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            48 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            49 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 13,
                'role_id' => 2,
            ),
            51 => 
            array (
                'permission_id' => 13,
                'role_id' => 3,
            ),
            52 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            53 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            54 => 
            array (
                'permission_id' => 13,
                'role_id' => 6,
            ),
            55 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            57 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            58 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            59 => 
            array (
                'permission_id' => 14,
                'role_id' => 6,
            ),
            60 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            62 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            64 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            65 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            66 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            67 => 
            array (
                'permission_id' => 16,
                'role_id' => 6,
            ),
            68 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            70 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            72 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
            74 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 20,
                'role_id' => 2,
            ),
            76 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            77 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            78 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            79 => 
            array (
                'permission_id' => 20,
                'role_id' => 6,
            ),
            80 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 21,
                'role_id' => 2,
            ),
            82 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            84 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            86 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 24,
                'role_id' => 2,
            ),
            88 => 
            array (
                'permission_id' => 24,
                'role_id' => 3,
            ),
            89 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            90 => 
            array (
                'permission_id' => 24,
                'role_id' => 5,
            ),
            91 => 
            array (
                'permission_id' => 24,
                'role_id' => 6,
            ),
            92 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            93 => 
            array (
                'permission_id' => 25,
                'role_id' => 2,
            ),
            94 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 27,
                'role_id' => 2,
            ),
            97 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            98 => 
            array (
                'permission_id' => 28,
                'role_id' => 2,
            ),
            99 => 
            array (
                'permission_id' => 28,
                'role_id' => 3,
            ),
            100 => 
            array (
                'permission_id' => 28,
                'role_id' => 4,
            ),
            101 => 
            array (
                'permission_id' => 28,
                'role_id' => 5,
            ),
            102 => 
            array (
                'permission_id' => 28,
                'role_id' => 6,
            ),
            103 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 29,
                'role_id' => 2,
            ),
            105 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
        ));
        
        
    }
}