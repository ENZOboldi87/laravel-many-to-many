<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $faker->addProvider(new \Faker\Provider\Fakecar($faker));


      for ($i=0; $i < 10; $i++) {
        $new_car = new Car();
        $new_car->manifacturer = $faker->vehicle;
        $new_car->year = $faker->biasedNumberBetween(1998,2017, 'sqrt');
        $new_car->engine = $faker->vehicleModel;
        $new_car->plate = $faker->vehicleRegistration();
        $new_car->user_id = rand(1,5);
        $new_car->save();

        // $new_car->tags()->attach(rand(1,4));
      }
    }
}
