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
                'name' => 'rod-chief',
                'display_name' => 'Rod-chief',
                'description' => 'Rod-chief',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'rod-ellen',
                'display_name' => 'Rod-ellen',
                'description' => 'Rod-ellen',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'rod1',
                'display_name' => 'Rod1',
                'description' => 'Rod1',
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:48:47',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'rod2',
                'display_name' => 'Rod2',
                'description' => 'Rod2',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'rod3',
                'display_name' => 'Rod3',
                'description' => 'Rod3',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'rod4',
                'display_name' => 'Rod4',
                'description' => 'Rod4',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'rod5',
                'display_name' => 'Rod5',
                'description' => 'Rod5',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'rod6',
                'display_name' => 'Rod6',
                'description' => 'Rod6',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'rod7',
                'display_name' => 'Rod7',
                'description' => 'Rod7',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'rtci-chief',
                'display_name' => 'Rtci-chief',
                'description' => 'Rtci-chief',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'rtci1',
                'display_name' => 'Rtci1',
                'description' => 'Rtci1',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'rtci2',
                'display_name' => 'Rtci2',
                'description' => 'Rtci2',
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'rtci3',
                'display_name' => 'Rtci3',
                'description' => 'Rtci3',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'rtci4',
                'display_name' => 'Rtci4',
                'description' => 'Rtci4',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'rtci5',
                'display_name' => 'Rtci5',
                'description' => 'Rtci5',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'rtci6',
                'display_name' => 'Rtci6',
                'description' => 'Rtci6',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'rtci7',
                'display_name' => 'Rtci7',
                'description' => 'Rtci7',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'rtci8',
                'display_name' => 'Rtci8',
                'description' => 'Rtci8',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'rtci9',
                'display_name' => 'Rtci9',
                'description' => 'Rtci9',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'rtci10',
                'display_name' => 'Rtci10',
                'description' => 'Rtci10',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'rtci11',
                'display_name' => 'Rtci11',
                'description' => 'Rtci11',
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'rtci12',
                'display_name' => 'Rtci12',
                'description' => 'Rtci12',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'rtci13',
                'display_name' => 'Rtci13',
                'description' => 'Rtci13',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'fasd-chief',
                'display_name' => 'Fasd-chief',
                'description' => 'Fasd-chief',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'fasd1',
                'display_name' => 'Fasd1',
                'description' => 'Fasd1',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'fasd2',
                'display_name' => 'Fasd2',
                'description' => 'Fasd2',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'fasd3',
                'display_name' => 'Fasd3',
                'description' => 'Fasd3',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'fasd4',
                'display_name' => 'Fasd4',
                'description' => 'Fasd4',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'fasd5',
                'display_name' => 'Fasd5',
                'description' => 'Fasd5',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'fasd6',
                'display_name' => 'Fasd6',
                'description' => 'Fasd6',
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'fasd7',
                'display_name' => 'Fasd7',
                'description' => 'Fasd7',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'hrmo',
                'display_name' => 'Hrmo',
                'description' => 'Hrmo',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'records',
                'display_name' => 'Records',
                'description' => 'Records',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'return-clerk',
                'display_name' => 'Return-clerk',
                'description' => 'Return-clerk',
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
        ));
        
        
    }
}