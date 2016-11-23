<?php

// Somehow the autoloader doesn't work as expected...
require 'vendor/orchestra/testbench/src/TestCase.php';

abstract class TestCase extends Orchestra\TestBench\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    protected $tables = [];

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    public function cleanDatabase()
    {
        foreach ($this->tables as $tableName) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::statement("TRUNCATE TABLE $tableName");
            DB::statement("ALTER TABLE $tableName AUTO_INCREMENT=1");
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }

    public function setUp()
    {
        parent::setUp();

        $this->cleanDatabase();
        $this->withFactories(__DIR__.'/../packages/dfox288/motor-backend/database/factories');
    }
}
