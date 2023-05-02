<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(DivisionsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(DivisionActionsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DocTypesTableSeeder::class);
        $this->call(OriginOfficesTableSeeder::class);
        $this->call(MeansOfReceivingsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionUserTableSeeder::class);
    }
}
