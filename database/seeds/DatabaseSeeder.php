<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(RoleAccessTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ManagerTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(SinglePageTableSeeder::class);
        $this->call(ExpressFeeTableSeeder::class);
        $this->call(AdTableSeeder::class);
        $this->call(AdPlaceTableSeeder::class);
        $this->call(ContractCategoryTableSeeder::class);
        $this->call(ContractTplTableSeeder::class);
        $this->call(ContractTplSectionTableSeeder::class);
        $this->call(EsignBankTableSeeder::class);
        $this->call(EsignBankAreaTableSeeder::class);
    }
}
