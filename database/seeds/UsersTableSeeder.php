<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_user = Role::where('name', 'user')->first();

      //User Model - Admin
      $admin = new User();
      $admin->name = 'Mo Che';
      $admin->email = 'admin1@mobookstore.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      //User Model - User
      $user = new User();
      $user->name = 'John jones';
      $user->email = 'johnj@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Andy Ryan';
      $user->email = 'andyR@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Mary Smith';
      $user->email = 'marysmith@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Sam Kenny';
      $user->email = 'skenny@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      $user = new User();
      $user->name = 'Laura Glynn';
      $user->email = 'lglynn@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);


      $user = new User();
      $user->name = 'Jane Lynch';
      $user->email = 'janelynch@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);
    }
}
