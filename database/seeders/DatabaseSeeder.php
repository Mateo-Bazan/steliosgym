<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\RolSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
		$this->call(UsersTableSeeder::class);
		$this->call(RolSeeder::class);
		//$this->call('UsersTableSeeder');
		//$this->call('RolSeeder');
    }
}