<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
        	'users',
            'monedas',
        	'lista1s',
            'lista2s',
            'lista3s',
            'lista4s',
            'lista5s',
            'lista6s',
            'lista7s',
            'lista8s',
            'lista10s',
            'lista11s'
        ]);

        $this->call(UserSeeder::class);
        $this->call(MonedaSeeder::class);
        $this->call(Lista1Seeder::class);
        $this->call(Lista2Seeder::class);
        $this->call(Lista3Seeder::class);
        $this->call(Lista4Seeder::class);
        $this->call(Lista5Seeder::class);
        $this->call(Lista6Seeder::class);
        $this->call(Lista7Seeder::class);
        $this->call(Lista8Seeder::class);
        $this->call(Lista10Seeder::class);
        $this->call(Lista11Seeder::class);
    }

    protected function truncateTables(array $tables)
    {

	    DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

	    foreach ($tables as $table) {
	    	DB::table($table)->truncate();
	    }

	    DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

	}

}
