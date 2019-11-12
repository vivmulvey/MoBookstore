<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = Role:: where('name' ,'user')->first();

        foreach($role_user->users as $user){
          $customer = new Customer();

          $customer->address = rand(1,100) . " Main Street";
          $customer->phone_number ='0'. $this->random_str(2 , '1234567890') ."-" . $this->random_str(7 , '1234567890');
          $customer->user_id = $user->id;

          $customer->save();
        }
    }

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){

      $pieces = [];

      $max = mb_strlen($keyspace, '8bit') - 1; for ($i = 0; $i < $length; ++$i) {

      $pieces []= $keyspace[random_int(0, $max)];
    }

      return implode('', $pieces);
     }
}
