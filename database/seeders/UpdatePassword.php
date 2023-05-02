<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpdatePassword extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->where('id', '1')->update(['password' => '$2y$10$8shcU4G579FhtMsRb98TkefiNGmSMaOdCdFN1rhZC/Z/0lO/.tONW']);//bismillah
    }
}
