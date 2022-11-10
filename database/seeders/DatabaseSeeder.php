<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Motor\Admin\Database\Seeders\MotorAdminDatabaseSeeder;
use Motor\Media\Database\Seeders\MotorMediaDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MotorAdminDatabaseSeeder::class,
            MotorMediaDatabaseSeeder::class,
        ]);
    }
}
