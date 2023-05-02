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
                'email_verified_at' => '2022-12-20 20:48:47',
                'designation' => 'Regional Director',
                'signature' => 'jgtizon.png',
                'file_path' => NULL,
                'password' => '$2y$10$csmg.1nhdUOkH4Dbevz6bOBTY5h7KWd5gtfoMP5ULozs/uIlXnsri',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            1 => 
            array (
                'id' => 2,
                'office_id' => 1,
                'division_id' => 1,
                'name' => 'Omar Alejandrino',
                'email' => 'romelmar.alejandrino@gmail.com',
                'username' => 'Administrator',
                'email_verified_at' => '2022-12-20 20:48:47',
                'designation' => 'IT Specialist',
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$Wfkvn3/vvZajWtugcrwmOub3x2deUouxfJG8AV9SR47rS7hwRDAvW',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-25 09:18:05',
            ),
            2 => 
            array (
                'id' => 3,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Cecilia Burdeos',
                'email' => 'ccburdeos@tesda.gov.ph',
                'username' => 'Rod-chief',
                'email_verified_at' => '2022-12-20 20:48:47',
                'designation' => 'ROD Chief',
                'signature' => 'ccburdeos.png',
                'file_path' => NULL,
                'password' => '$2y$10$2oBl49Xbt4hhmsJ.mItv3.WUGok9HfPHeXnNAieDfuAiSCA.JzF6q',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            3 => 
            array (
                'id' => 4,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Ellen Elio',
                'email' => 'etelio@tesda.gov.ph',
                'username' => 'Rod-ellen',
                'email_verified_at' => '2022-12-20 20:48:47',
                'designation' => NULL,
                'signature' => 'etelio.png',
                'file_path' => NULL,
                'password' => '$2y$10$jksQ.9uJHgon6tL4IEHu0uSgP8b2cfL3D5r8AD.thYVbZ16E2wema',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:47',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            4 => 
            array (
                'id' => 5,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Ma. Joji Ann Pagtolon-an',
                'email' => 'mjap@tesda.gov.ph',
                'username' => 'Rod1',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => 'mjapagtolon-an.png',
                'file_path' => NULL,
                'password' => '$2y$10$3nx0yEwijmN8FL9T0KTUMO/iKQhKY7Y.ppALm6aZlQ4grQJGs2QH2',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            5 => 
            array (
                'id' => 6,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Maria Liba Celestial',
                'email' => 'mlc@tesda.gov.ph',
                'username' => 'Rod2',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => 'mpcelestial.png',
                'file_path' => NULL,
                'password' => '$2y$10$ks50l8dz7wFQgVask4JnHellcbRDgsSlHYKV13RyiYhRZV/BfG01.',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            6 => 
            array (
                'id' => 7,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Mia Medicielo',
                'email' => 'mia@tesda.gov.ph',
                'username' => 'Rod3',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$H5gUELTTjbU8DJUbFym4M.lvF0pee0xApxFo67yVN2VznJJ9e2NCe',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            7 => 
            array (
                'id' => 8,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Roger Esporas',
                'email' => 'resporas@tesda.gov.ph',
                'username' => 'Rod4',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => 'rgesporas.png',
                'file_path' => NULL,
                'password' => '$2y$10$4cFVHiWxADuLY8NjVVsQKO8YyO3VWaB646trYjYpOydLwDLGjgpS6',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            8 => 
            array (
                'id' => 9,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Bernadette Puertas',
                'email' => 'bpuertas@tesda.gov.ph',
                'username' => 'Rod5',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => 'bvpuertas.png',
                'file_path' => NULL,
                'password' => '$2y$10$PWesO591OLZBD2GtrTZ7h.v9AfHvRsgsKJR/.7iugdTxane3oa1za',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            9 => 
            array (
                'id' => 10,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Christie Ann Corcino',
                'email' => 'ccorcino@tesda.gov.ph',
                'username' => 'Rod6',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$VtcTqx6zsOUmriVcNqLiQOPGHuROC/r7NDYQbgrSgMoLOKL3hySMC',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            10 => 
            array (
                'id' => 11,
                'office_id' => 1,
                'division_id' => 2,
                'name' => 'Jenny Seculles',
                'email' => 'jseculles@tesda.gov.ph',
                'username' => 'Rod7',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => 'jseculles.png',
                'file_path' => NULL,
                'password' => '$2y$10$jONUiaT0qQVJ.b5mso6xMOmzb8ubpbTkCaoOlZHzaM2MA5k9EAd2e',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            11 => 
            array (
                'id' => 12,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Porferio Celestial',
                'email' => 'pcelestial@tesda.gov.ph',
                'username' => 'Rtci-chief',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => 'pccelestial.png',
                'file_path' => NULL,
                'password' => '$2y$10$XnIncsbZS8.G9/Gr.88jROB1iBCHh2fQ3fcopjb0/xE9kaooaYVj6',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            12 => 
            array (
                'id' => 13,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Donnabelle Sollesta',
                'email' => 'dsollesta@tesda.gov.ph',
                'username' => 'Rtci1',
                'email_verified_at' => '2022-12-20 20:48:48',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$Xctipd7bQN94xhxJHYq32umBPxEGIEAOp2vl3fepP7KgQRwwd2Lh6',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:48',
                'updated_at' => '2022-12-20 20:48:48',
            ),
            13 => 
            array (
                'id' => 14,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Ma. Juna Sarroza',
                'email' => 'jsarroza@tesda.gov.ph',
                'username' => 'Rtci2',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => 'mjcsarroza.png',
                'file_path' => NULL,
                'password' => '$2y$10$7TGF9AgV0R8d/9iJmIiNje2/OM5ilvEyN3nb/A8rdb3Hm90QhBdtW',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            14 => 
            array (
                'id' => 15,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Joel Lopez',
                'email' => 'rtci3@tesda.gov.ph',
                'username' => 'Rtci3',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$ZSbGwKHxP8slsoToZIihc.jIsrPUmE4dwo1HZRMlcrxhFs8.1tcym',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            15 => 
            array (
                'id' => 16,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Vincent Nuñal',
                'email' => 'rtci4@tesda.gov.ph',
                'username' => 'Rtci4',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => 'vdnunal.png',
                'file_path' => NULL,
                'password' => '$2y$10$nDjtwJ8OG6OorCO4BZW55OHE7Us8wJdK2TWLmvH3yynVzOBT.w3TW',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            16 => 
            array (
                'id' => 17,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Ulysses Cortez Jr.',
                'email' => 'rtci5@tesda.gov.ph',
                'username' => 'Rtci5',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => 'uacortezjr.png',
                'file_path' => NULL,
                'password' => '$2y$10$xKUA5hoqlo/lf1QXKee8mutXQuZNhqfSq8pe3F2b1u4NQRIEtzGO6',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            17 => 
            array (
                'id' => 18,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'John Laurence Garanganao',
                'email' => 'rtci6@tesda.gov.ph',
                'username' => 'Rtci6',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$RlJyBdE34YUpNNAMY6HqN.HCjrb5oRmmYG8kOzKbANH.sLnlyTTDW',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            18 => 
            array (
                'id' => 19,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Fritz Pedregosa',
                'email' => 'rtci7@tesda.gov.ph',
                'username' => 'Rtci7',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$94XLyQcn/zPjvo2xmas/k.6Ff1.syhrPYze3g4LiEw0ZmXEIdtiVm',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            19 => 
            array (
                'id' => 20,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Leslie Ann Lagrada',
                'email' => 'rtci8@tesda.gov.ph',
                'username' => 'Rtci8',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => 'ladlagrada.png',
                'file_path' => NULL,
                'password' => '$2y$10$fRN9suIMJ7mbpxoRE4whNu.uGn/tK3X7914dasWQmX2EtxPy.rrOi',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            20 => 
            array (
                'id' => 21,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Liezl Echano',
                'email' => 'rtci9@tesda.gov.ph',
                'username' => 'Rtci9',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => 'ltechano.png',
                'file_path' => NULL,
                'password' => '$2y$10$wwZkTtnhyNBc8mZkEriWjuxuH6jPRIgNPL4UT7s7vsY1ou3qzv4wK',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            21 => 
            array (
                'id' => 22,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'KC Jane De la Torre',
                'email' => 'rtci10@tesda.gov.ph',
                'username' => 'Rtci10',
                'email_verified_at' => '2022-12-20 20:48:49',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$qcZBzIjDHCoVQcEAqpSqBOn/.9l31m9/J2wedEGO8W0aKVIoICtvW',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:49',
                'updated_at' => '2022-12-20 20:48:49',
            ),
            22 => 
            array (
                'id' => 23,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Lory Guileño',
                'email' => 'rtci11@tesda.gov.ph',
                'username' => 'Rtci11',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => 'lgguileno.png',
                'file_path' => NULL,
                'password' => '$2y$10$826qkcXhIf6gFX2qJ7zNmuSEku4/0ZwgcIIAW8X5yuUIH5xekTDx2',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            23 => 
            array (
                'id' => 24,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Francis Correa',
                'email' => 'rtci12@tesda.gov.ph',
                'username' => 'Rtci12',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$HE8ZtGVadFB5zn52JtZMKejJu9eXoFEu3GBJbowUjmO4OVnUzfbru',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            24 => 
            array (
                'id' => 25,
                'office_id' => 1,
                'division_id' => 7,
                'name' => 'Susan Brendia',
                'email' => 'rtci13@tesda.gov.ph',
                'username' => 'Rtci13',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$uB8CfD9WVqk1S.QksSHtcuZN3kuq5Ufaaj5a4aNB3EZLJ.puDeEsq',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            25 => 
            array (
                'id' => 26,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Ma. Mabel Biyo',
                'email' => 'mmsbiyo@tesda.gov.ph',
                'username' => 'Fasd-chief',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$uRrAYr8YWuvMtLXmqyGd3uKC7W5dgXiU4.bA7ki.HKQq3BDDQxk0m',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            26 => 
            array (
                'id' => 27,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Arman Marbebe',
                'email' => 'fasd1@tesda.gov.ph',
                'username' => 'Fasd1',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$fy8eEopWlKqfwyqbS.LsR.0S9us3unUd154EeFl0DOt9arFwMYwLe',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:48:50',
            ),
            27 => 
            array (
                'id' => 28,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Alva May Dollete',
                'email' => 'fasd2@tesda.gov.ph',
                'username' => 'Fasd2',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => 'amcdollete.png',
                'file_path' => NULL,
                'password' => '$2y$10$PX6CDuIZZwcG0VK9tpjZhOt/LwlwETmruEFtpqOFLGx5sXE.lSxzG',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            28 => 
            array (
                'id' => 29,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Jielcy Galas',
                'email' => 'fasd3@tesda.gov.ph',
                'username' => 'Fasd3',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => 'jggalas.png',
                'file_path' => NULL,
                'password' => '$2y$10$V3VAf46CynlOuv1QuvaQz.u3DYWd4d/Ya9LW.uCXAd2IGQo5H/Dx6',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            29 => 
            array (
                'id' => 30,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Rogelyn Balberde',
                'email' => 'fasd4@tesda.gov.ph',
                'username' => 'Fasd4',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => 'rmbalberde.png',
                'file_path' => NULL,
                'password' => '$2y$10$xm8SMewAz4eppXPhB9xqROP5pfCRzRd7fPxsCLMpv6juFZe5mfGCS',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            30 => 
            array (
                'id' => 31,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Yunny Sumanghid',
                'email' => 'fasd5@tesda.gov.ph',
                'username' => 'Fasd5',
                'email_verified_at' => '2022-12-20 20:48:50',
                'designation' => NULL,
                'signature' => 'yfsumanghid.png',
                'file_path' => NULL,
                'password' => '$2y$10$mXSxIi7.6bAW1qFxgCrJ5.2JgdJ8UKZcb3ImDWOqlpIw4AM1su5bm',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:50',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            31 => 
            array (
                'id' => 32,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'June Lyn Debil',
                'email' => 'fasd6@tesda.gov.ph',
                'username' => 'Fasd6',
                'email_verified_at' => '2022-12-20 20:48:51',
                'designation' => NULL,
                'signature' => 'jlodebil.png',
                'file_path' => NULL,
                'password' => '$2y$10$iHztjuXl/7EjJ5OYF.eD0eV08IMtMRQ7sZ1U69NfIo7gvcY54HpKO',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            32 => 
            array (
                'id' => 33,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Edgar Porras',
                'email' => 'fasd7@tesda.gov.ph',
                'username' => 'Fasd7',
                'email_verified_at' => '2022-12-20 20:48:51',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$8155QOzL1VGIcV8KOR3N.eUvkOOnzT7ch2UK4g.dTpqXtI/Y.UtXW',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            33 => 
            array (
                'id' => 34,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Janine Mae Calaguing',
                'email' => 'jmacalaguing@tesda.gov.ph',
                'username' => 'Hrmo',
                'email_verified_at' => '2022-12-20 20:48:51',
                'designation' => NULL,
                'signature' => 'jmacalaguing.png',
                'file_path' => NULL,
                'password' => '$2y$10$q0wUOIidD8qmqDo4atmExeKzayF2GA8zAFm8OcqjrmNmWr5rSeGZy',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:56:42',
            ),
            34 => 
            array (
                'id' => 35,
                'office_id' => 1,
                'division_id' => 3,
                'name' => 'Rodgen Pagtolon-an',
                'email' => 'recordsfasd@gmail.com',
                'username' => 'Records',
                'email_verified_at' => '2022-12-20 20:48:51',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$WfH3S12IfSXaRC5YU68t5eyiBzjt56QnfP3ehR/xZ7LnQhrcJ7pty',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
            35 => 
            array (
                'id' => 36,
                'office_id' => 1,
                'division_id' => 1,
                'name' => 'return-clerk',
                'email' => 'return@app.com',
                'username' => 'Return-clerk',
                'email_verified_at' => '2022-12-20 20:48:51',
                'designation' => NULL,
                'signature' => NULL,
                'file_path' => NULL,
                'password' => '$2y$10$78vw2nWp62dwzPtTDVGyAOAttqGx7SNTWcjIJrCQsSGXFxl9FUJPO',
                'remember_token' => NULL,
                'created_at' => '2022-12-20 20:48:51',
                'updated_at' => '2022-12-20 20:48:51',
            ),
        ));
        
        
    }
}