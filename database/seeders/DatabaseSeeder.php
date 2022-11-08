<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Motor\Admin\Database\Seeders\MotorAdminDatabaseSeeder;
use Motor\Media\Database\Seeders\MotorMediaDatabaseSeeder;
use Partymeister\Accounting\Database\Seeders\PartymeisterAccountingDatabaseSeeder;
use Partymeister\Competitions\Database\Seeders\PartymeisterCompetitionsDatabaseSeeder;
use Partymeister\Core\Database\Seeders\PartymeisterCoreDatabaseSeeder;
use Partymeister\Frontend\Database\Seeders\PartymeisterFrontendDatabaseSeeder;
use Partymeister\Slides\Database\Seeders\PartymeisterSlidesDatabaseSeeder;

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
