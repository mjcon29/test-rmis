<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'office_id' => 1,
                'division_id' => 1,
                'name' => 'Jerry Tizon',
                'email' => 'jgtizon@tesda.gov.ph',
                'username' => 'Superadmin',
                'email_verified_at' => '2022-12-13 10:30:22',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$8shcU4G579FhtMsRb98TkefiNGmSMaOdCdFN1rhZC/Z/0lO/.tONW',
                'remember_token' => 'bI3AK4faslWBr4RcglurvTDHpxN7ThJfhDSLbnsl19msuA3cYRROAoS39pGm',
                'created_at' => '2022-12-13 10:30:22',
                'updated_at' => '2022-12-15 09:53:06',
            ),
            1 => 
            array (
                'id' => 2,
                'office_id' => 1,
                'division_id' => 1,
                'name' => 'Romelmar Alejandrino',
                'email' => 'romelmar.alejandrino@gmail.com',
                'username' => 'Administrator',
                'email_verified_at' => '2022-12-13 10:30:23',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$8shcU4G579FhtMsRb98TkefiNGmSMaOdCdFN1rhZC/Z/0lO/.tONW',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:23',
                'updated_at' => '2022-12-19 08:56:22',
            ),
            2 => 
            array (
                'id' => 3,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Cecilia Burdeos',
                'email' => 'ccburdeos@tesda.gov.ph',
                'username' => 'Rod-chief',
                'email_verified_at' => '2022-12-13 10:30:24',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$kcCzTS4.GAzobZbOo8faOO2JWTA8iwwm8rJDnwyhvUfbHtNm8S1eW',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:24',
                'updated_at' => '2022-12-15 23:28:23',
            ),
            3 => 
            array (
                'id' => 4,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Ellen Elio',
                'email' => 'etelio@tesda.gov.ph',
                'username' => 'Rod-ellen',
                'email_verified_at' => '2022-12-13 10:30:24',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$8shcU4G579FhtMsRb98TkefiNGmSMaOdCdFN1rhZC/Z/0lO/.tONW',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:24',
                'updated_at' => '2022-12-16 15:24:19',
            ),
            4 => 
            array (
                'id' => 5,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Ma. Joji Ann Pagtolon-an',
                'email' => 'mjdpagtolon-an@tesda.gov.ph',
                'username' => 'Maria Joji Ann',
                'email_verified_at' => '2022-12-13 10:30:25',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$uRIJd0cwcQmm2NDkGTHhQ.jDPmYAK5wZUj8MPNNn06gYhXBtJhM0m',
                'remember_token' => 'riA7izVOgB80NfUo3yEEXtgtWWVSmjNWBgS7MmwWIxAId7XJSkghoVlieqry',
                'created_at' => '2022-12-13 10:30:25',
                'updated_at' => '2022-12-16 13:09:22',
            ),
            5 => 
            array (
                'id' => 6,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Maria Liba Celestial',
                'email' => 'mpcelestial@tesda.gov.ph',
                'username' => 'Rod2',
                'email_verified_at' => '2022-12-13 10:30:25',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$p.QQXkOkGJ//MhMIOdShW.81DMN7S6FHj1XLnSDL2pwWzoK3oa0h6',
                'remember_token' => 'bOyCM6vjyvL19D38tDtVSQOCIW8qz9cqr5ViyiPdskTwOF91lvvavq0NtNyh',
                'created_at' => '2022-12-13 10:30:25',
                'updated_at' => '2022-12-15 09:23:29',
            ),
            6 => 
            array (
                'id' => 7,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Mia Medicielo',
                'email' => 'msmedicielo@tesda.gov.ph',
                'username' => 'Rod3',
                'email_verified_at' => '2022-12-13 10:30:26',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$3uDos9hWR9laFKFkkDZQAexa/xD2sy.tIGjzV3miyzIwHoogF8twO',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:26',
                'updated_at' => '2022-12-14 14:50:17',
            ),
            7 => 
            array (
                'id' => 8,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Roger Esporas',
                'email' => 'rpesporas@tesda.gov.ph',
                'username' => 'Rod4',
                'email_verified_at' => '2022-12-13 10:30:26',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$WlZ1yDgHCfrNIBSPhXsfBOhQss6injzJLzFZDERcBk5woqGp6US/2',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:26',
                'updated_at' => '2022-12-15 09:50:09',
            ),
            8 => 
            array (
                'id' => 9,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Bernadette Puertas',
                'email' => 'bpuertas@tesda.gov.ph',
                'username' => 'Rod5',
                'email_verified_at' => '2022-12-13 10:30:27',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$yfLwn/AIncjpz8M0dGlEXOD4bglPlonSc13h6Ge.27W7b1Jq7ykoC',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:27',
                'updated_at' => '2022-12-13 10:30:27',
            ),
            9 => 
            array (
                'id' => 10,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Christie Ann Corcino',
                'email' => 'ccorcino@tesda.gov.ph',
                'username' => 'Rod6',
                'email_verified_at' => '2022-12-13 10:30:27',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$Cqtn/YWNIG5viuVe41yETu3rpD2YhR6K60NIIIys6LJ.VIMi/GWVm',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:27',
                'updated_at' => '2022-12-16 09:12:43',
            ),
            10 => 
            array (
                'id' => 11,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Jenny Seculles',
                'email' => 'jcseculles@tesda.gov.ph',
                'username' => 'Rod7',
                'email_verified_at' => '2022-12-13 10:30:27',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$UIWia.7H4CWp1LPhSptyB.wj4YIhzGAB0nU23m.NP7PUJGpHDrjJa',
                'remember_token' => 'ZLl7MSw7fljsiHPZR9i6frrVCcfqfcTp270YrXweN7LEVQIdQTjLFuP8L781',
                'created_at' => '2022-12-13 10:30:27',
                'updated_at' => '2022-12-15 09:27:54',
            ),
            11 => 
            array (
                'id' => 12,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Porferio Celestial',
                'email' => 'pcelestial@tesda.gov.ph',
                'username' => 'Rtci-chief',
                'email_verified_at' => '2022-12-13 10:30:28',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$G9VTUmEoRsaWRpock4BGDOuVeH9xfAgr1YYYB3cotYR1EH6gRXwnW',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:28',
                'updated_at' => '2022-12-13 10:30:28',
            ),
            12 => 
            array (
                'id' => 13,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Donnabelle Sollesta',
                'email' => 'dsollesta@tesda.gov.ph',
                'username' => 'Rtci1',
                'email_verified_at' => '2022-12-13 10:30:28',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$RKGkqzgjH8sHY.GEh3xg..eJJXGYuBZVQ/m7bE/6dqR//qM30ktlG',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:28',
                'updated_at' => '2022-12-13 10:30:28',
            ),
            13 => 
            array (
                'id' => 14,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Ma. Juna Sarroza',
                'email' => 'jsarroza@tesda.gov.ph',
                'username' => 'Rtci2',
                'email_verified_at' => '2022-12-13 10:30:29',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$er9wuhHUF4vurRJfPt6WmuAuxSJUo7et4qHc7Jhc8ocGAeOmRc/fi',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:29',
                'updated_at' => '2022-12-13 10:30:29',
            ),
            14 => 
            array (
                'id' => 15,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Joel Lopez',
                'email' => 'rtci3@tesda.gov.ph',
                'username' => 'Rtci3',
                'email_verified_at' => '2022-12-13 10:30:30',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$iMnIp.pPFlarJyREt9APveoiBjttBCDe5uvscMGjb.xq/JvMv13yO',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:30',
                'updated_at' => '2022-12-13 10:30:30',
            ),
            15 => 
            array (
                'id' => 16,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Vincent Nuñal',
                'email' => 'rtci4@tesda.gov.ph',
                'username' => 'Rtci4',
                'email_verified_at' => '2022-12-13 10:30:30',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$6J37A2DYxOQS9BaRFdXza.dmBq/kgubwCk3t5M2wdzNzq92WVCewO',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:30',
                'updated_at' => '2022-12-13 10:30:30',
            ),
            16 => 
            array (
                'id' => 17,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Ulysses Cortez Jr.',
                'email' => 'rtci5@tesda.gov.ph',
                'username' => 'Rtci5',
                'email_verified_at' => '2022-12-13 10:30:31',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$KP7gXz6LESUVVheUUxkjReqZKYS3Z5d9FvsChWVdDLFz0tGtpyv1S',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:31',
                'updated_at' => '2022-12-13 10:30:31',
            ),
            17 => 
            array (
                'id' => 18,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'John Laurence Garanganao',
                'email' => 'rtci6@tesda.gov.ph',
                'username' => 'Rtci6',
                'email_verified_at' => '2022-12-13 10:30:31',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$NBHBkIxXd8aKOAwlBJlILe6ZR2HjTSaik0GrTuo8m1vsGUY0duWTa',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:31',
                'updated_at' => '2022-12-13 10:30:31',
            ),
            18 => 
            array (
                'id' => 19,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Fritz Pedregosa',
                'email' => 'rtci7@tesda.gov.ph',
                'username' => 'Rtci7',
                'email_verified_at' => '2022-12-13 10:30:32',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$rySL1zLJKSrx5zKF5DTp1OBH8Obt3MvjLTTsryBbHnGITRlN8Z.hi',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:32',
                'updated_at' => '2022-12-13 10:30:32',
            ),
            19 => 
            array (
                'id' => 20,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Leslie Ann Lagrada',
                'email' => 'rtci8@tesda.gov.ph',
                'username' => 'Rtci8',
                'email_verified_at' => '2022-12-13 10:30:32',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$ILpzTSlx7ZXJ/wnohAKZaug1lqN6mHsj3o.mEITw8WlsdIIZvME52',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:32',
                'updated_at' => '2022-12-13 10:30:32',
            ),
            20 => 
            array (
                'id' => 21,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Liezl Echano',
                'email' => 'rtci9@tesda.gov.ph',
                'username' => 'Rtci9',
                'email_verified_at' => '2022-12-13 10:30:33',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$XB6lSfHa6/uf0idj3GdNqOU.8IIK4zEvKLyVoN6gCMayEdNvs8VyS',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:33',
                'updated_at' => '2022-12-13 10:30:33',
            ),
            21 => 
            array (
                'id' => 22,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'KC Jane De la Torre',
                'email' => 'rtci10@tesda.gov.ph',
                'username' => 'Rtci10',
                'email_verified_at' => '2022-12-13 10:30:33',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$y0.oFhZpJ56Flg1CSyJZMu86x1RNHl/OBU7c09w.n0eVksVeGCz4W',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:33',
                'updated_at' => '2022-12-13 10:30:33',
            ),
            22 => 
            array (
                'id' => 23,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Lory Guileño',
                'email' => 'rtci11@tesda.gov.ph',
                'username' => 'Rtci11',
                'email_verified_at' => '2022-12-13 10:30:34',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$/oaU4TkQ6H.XabxSJZffleE.PetPbA3KwMMUfQle4NYbhQ2bhNz8S',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:34',
                'updated_at' => '2022-12-13 10:30:34',
            ),
            23 => 
            array (
                'id' => 24,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Francis Correa',
                'email' => 'rtci12@tesda.gov.ph',
                'username' => 'Rtci12',
                'email_verified_at' => '2022-12-13 10:30:34',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$Ovo/pYwEDThSh7Lr21P7S.H/NoZciDHtaHN2cIALnNNQ4giX7BIMC',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:34',
                'updated_at' => '2022-12-13 10:30:34',
            ),
            24 => 
            array (
                'id' => 25,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Susan Brendia',
                'email' => 'rtci13@tesda.gov.ph',
                'username' => 'Rtci13',
                'email_verified_at' => '2022-12-13 10:30:35',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$BAHpcbx6XUVvXs0GjaBLMevxc8SzJKrzHj479ld/J5t/PT6txSRGa',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:35',
                'updated_at' => '2022-12-13 10:30:35',
            ),
            25 => 
            array (
                'id' => 26,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Ma. Mabel Biyo',
                'email' => 'mmsbiyo@tesda.gov.ph',
                'username' => 'Fasd-chief',
                'email_verified_at' => '2022-12-13 10:30:35',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$.8KybsG5btM2aA6C2VqcJOqG/4IySanOZcUgP0YAIU3SkRU0dsxTC',
                'remember_token' => 'DM2n6AkNurP47ZXxJzNkQEpHhBLc3lEHPfOjIfRMXCmvPy5WGT3y4yA6gA5l',
                'created_at' => '2022-12-13 10:30:35',
                'updated_at' => '2022-12-13 10:30:35',
            ),
            26 => 
            array (
                'id' => 27,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Arman Marbebe',
                'email' => 'fasd1@tesda.gov.ph',
                'username' => 'Fasd1',
                'email_verified_at' => '2022-12-13 10:30:36',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$ldEeJ0DL9WqWG7Bw8exmCu40GSLValrSp0E6ui.WIhK5msHXhxETq',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:36',
                'updated_at' => '2022-12-13 10:30:36',
            ),
            27 => 
            array (
                'id' => 28,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Alva May Dollete',
                'email' => 'fasd2@tesda.gov.ph',
                'username' => 'Fasd2',
                'email_verified_at' => '2022-12-13 10:30:36',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$HUhgvmJZVPRS1ul8CDVKXeSAf9LNyIVSW3afFEjmoRzI9jXa5Ns1y',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:36',
                'updated_at' => '2022-12-13 10:30:36',
            ),
            28 => 
            array (
                'id' => 29,
                'office_id' => 3,
                'division_id' => 3,
                'name' => 'Jielcy Galas',
                'email' => 'jggalas@tesda.gov.ph',
                'username' => 'Jielcy Galas',
                'email_verified_at' => '2022-12-13 10:30:37',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$h.BFZy9xtoEhUAlNHSKF8O6ZswcLZkBHAOKNSh5VkO.8fExtWilim',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:37',
                'updated_at' => '2022-12-15 14:19:12',
            ),
            29 => 
            array (
                'id' => 30,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Rogelyn Balberde',
                'email' => 'rmbalberde@tesda.gov.ph',
                'username' => 'Rogelyn',
                'email_verified_at' => '2022-12-13 10:30:38',
                'designation' => 'Property and Supply Officer',
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$aukIWcyBa9.zcobmcXriDecLk.eg7Be4WH92X0Fl35SsQ2MAqZMyy',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:38',
                'updated_at' => '2022-12-14 16:23:29',
            ),
            30 => 
            array (
                'id' => 31,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Yunny Sumanghid',
                'email' => 'fasd5@tesda.gov.ph',
                'username' => 'Fasd5',
                'email_verified_at' => '2022-12-13 10:30:38',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$kZvZjbCjzWhsZFSlJ4ONlOG6gQ7h5pt.cHsZhyXpU2omcExBmspga',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:38',
                'updated_at' => '2022-12-13 10:30:38',
            ),
            31 => 
            array (
                'id' => 32,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'June Lyn Debil',
                'email' => 'jlodebil@tesda.gov.ph',
                'username' => 'Fasd6',
                'email_verified_at' => '2022-12-13 10:30:39',
                'designation' => 'Admin Aide VI',
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$QiyVSxB7/5hSAxp0Anww4Oo9xzHca0LHLGrG1W480mQN2ufJ1/7HW',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:39',
                'updated_at' => '2022-12-23 08:12:43',
            ),
            32 => 
            array (
                'id' => 33,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Edgar Porras',
                'email' => 'fasd7@tesda.gov.ph',
                'username' => 'Fasd7',
                'email_verified_at' => '2022-12-13 10:30:39',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$XPL7zU.TE0Ztc8qQ8gE2ROxbMqPn9tKGKqcPY7Q1Mk3oc0jBx7rre',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:39',
                'updated_at' => '2022-12-13 10:30:39',
            ),
            33 => 
            array (
                'id' => 34,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Janine Mae Calaguing',
                'email' => 'jmacalaguing@tesda.gov.ph',
                'username' => 'Hrmo',
                'email_verified_at' => '2022-12-13 10:30:40',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$gQH3T5E0jxMZ99ZwGw88veX7l9eaqR4d17TY7kVvkseGToM8/jcUe',
                'remember_token' => '9DFlz7tb8DeMGriaf0KntkKd83qqgl98GzNLsGfyOmhYUqPLgkxNUE0NtG9D',
                'created_at' => '2022-12-13 10:30:40',
                'updated_at' => '2022-12-13 10:30:40',
            ),
            34 => 
            array (
                'id' => 35,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Rojen Pagtolon-an',
                'email' => 'recordsfasd@gmail.com',
                'username' => 'Records',
                'email_verified_at' => '2022-12-13 10:30:40',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$C4WCWjdrPN.1oDtGae5Vy.Bvunyg8hyegF6VrHtYhdWurc6.6cLTS',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:40',
                'updated_at' => '2022-12-28 09:20:17',
            ),
            35 => 
            array (
                'id' => 36,
                'office_id' => 1,
                'division_id' => 1,
                'name' => 'return-clerk',
                'email' => 'return@app.com',
                'username' => 'Return-clerk',
                'email_verified_at' => '2022-12-13 10:30:41',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$JIdz8Xk7oKqg3T8T/5uuWOzRBYcLOM3x3uhT1JJ7OMuveOKWBPjy.',
                'remember_token' => NULL,
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            36 => 
            array (
                'id' => 37,
                'office_id' => 1,
                'division_id' => 1,
                'name' => 'Delamae Dela Tore',
                'email' => 'region6@tesda.gov.ph',
                'username' => 'Delamae',
                'email_verified_at' => NULL,
                'designation' => 'ORD Secretary',
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$pTI8Y2fhlhSCjR71Yf.faeo2MucsvCtFp/xpPzEXOOlRHxMvtJSoO',
                'remember_token' => 'OmthynvswJxkTy83pa3XplZxyH9YBvmpUvRRur0JxRKTT7U7aq64hjCRplmR',
                'created_at' => '2022-12-14 15:16:19',
                'updated_at' => '2022-12-14 15:16:19',
            ),
            37 => 
            array (
                'id' => 38,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Niña Rose Jumeras',
                'email' => 'foractionrod@gmail.com',
                'username' => 'Niña Rose Jumeras',
                'email_verified_at' => NULL,
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$O/l2M3DfnMNYA5iyK2KMbuxXrtd1piCzi7eyWV5hgO90tDkyBQFi2',
                'remember_token' => 'RWvZQm3EDcb8KQGnQ8LYvnPibjjhvwPhreR2onTSme4gcsMxylIKtQw9ZJcu',
                'created_at' => '2022-12-15 09:16:04',
                'updated_at' => '2022-12-15 09:22:05',
            ),
            38 => 
            array (
                'id' => 39,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'John Mark Adolacion',
                'email' => 'hr.fasd6@tesda.gov.ph',
                'username' => 'John Mark Adolacion',
                'email_verified_at' => NULL,
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$emxzfplgPP6K4yn5nMdElOko9Z6l2qmYkCac3cL3m/kD6wCuYlxRK',
                'remember_token' => 'Sdbu5t7TixKJp07bZzsIPpVzr1NX7iaoIBWWslU32yO0xTP8pj0Ct2IWCbdG',
                'created_at' => '2022-12-19 09:48:13',
                'updated_at' => '2022-12-19 09:48:13',
            ),
            39 => 
            array (
                'id' => 40,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'John orly Galon',
                'email' => 'g.john.orly@gmail.com',
                'username' => 'John orly Galon',
                'email_verified_at' => NULL,
                'designation' => 'JO',
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$VNEgxhtqT8P89DwNZBg9vuM7Q2szAI.EvOUArA5miUChrlx63Xk4m',
                'remember_token' => NULL,
                'created_at' => '2022-12-29 10:03:52',
                'updated_at' => '2022-12-29 10:03:52',
            ),
            40 => 
            array (
                'id' => 41,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Mee Sheil Soloriano',
                'email' => 'mitch22panes@gmail.com',
                'username' => 'Mee Sheil Soloriano',
                'email_verified_at' => NULL,
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$xF0e1fMKq0ueJByV1UcJheZ4FKuWwFL1p0gJg7aJzNUbPPgLfMT/S',
                'remember_token' => NULL,
                'created_at' => '2022-12-29 10:13:28',
                'updated_at' => '2022-12-29 10:13:28',
            ),
            41 => 
            array (
                'id' => 42,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Clarrisse Sogo-an',
                'email' => 'sogoanclarisse@gmail.com',
                'username' => 'Clarrisse Sogo-an',
                'email_verified_at' => NULL,
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$CU12KZnYsFwpp5KLXBvCuO4sXAwC1cTTE8i0h7G.AHQgyZfS13fV6',
                'remember_token' => NULL,
                'created_at' => '2022-12-29 10:15:07',
                'updated_at' => '2022-12-29 10:15:07',
            ),
        ));
        
        
    }
}