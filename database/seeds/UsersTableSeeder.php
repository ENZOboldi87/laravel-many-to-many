<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 5; $i++) {
        $new_user = new User();
        $new_user->name = $faker->name;
        $new_user->email = $faker->email;
        $new_user->password = Hash::make($faker->password);
        $new_user->save();
      }
    }
}
