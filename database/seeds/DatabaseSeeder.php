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
        $this->call(RolesTableSeeder::class); //We want roles to be called first ( needs to exist first)
        $this->call(UsersTableSeeder::class);
    }
}
