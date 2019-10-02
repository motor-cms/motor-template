<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CategoryTreesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(NavigationTreesTableSeeder::class);
    }
}
