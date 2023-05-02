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
        // $this->call([DivisionSeeder::class]);
        // $this->call([ActionSeeder::class]);
        // // $this->call([UsersTableSeeder::class]);
        // $this->call([DivisionActionSeeder::class]);
        // $this->call([OfficeSeeder::class]);
        // // $this->call(LaratrustSeeder::class);

        // $this->call([DocTypeSeeder::class]);
        // $this->call([OriginOfficeSeeder::class]);
        // $this->call([MeansOfReceivingSeeder::class]);
        // $this->call([EmployeeSeeder::class]);

        // $this->call([DocumentSeeder::class]);
        // $this->call([DocRouteSeeder::class]);

        
        
        
        $this->call(DivisionsTableSeeder::class);
        $this->call(ActionsTableSeeder::class);
        $this->call(DivisionActionsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DocTypesTableSeeder::class);
        $this->call(OriginOfficesTableSeeder::class);
        $this->call(MeansOfReceivingsTableSeeder::class);
        // $this->call(DocumentsTableSeeder::class);
        // $this->call(DocRoutesTableSeeder::class);
        // $this->call(DocRouteActionsTableSeeder::class);
        // $this->call(DocRoutesUserTableSeeder::class);
        // $this->call(DocUsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        // $this->call(ActivityLogsTableSeeder::class);
        $this->call(PermissionUserTableSeeder::class);
        // $this->call(ImagesTableSeeder::class);
        $this->call(DocSignTableSeeder::class);
    }
}
