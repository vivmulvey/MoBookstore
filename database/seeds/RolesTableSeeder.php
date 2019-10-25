<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role(); //creating role
        $role_admin->name = 'admin';
        $role_admin->description = 'An administrator user';
        $role_admin->save(); //saving model - sends to DB

        $role_user = new Role(); //creating role
        $role_user->name = 'user';
        $role_user->description = 'An ordinary user';
        $role_user->save(); //saving model - sends to DB
    }
}
