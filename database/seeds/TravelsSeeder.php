<?php

use Illuminate\Database\Seeder;
use App\Travels;
use Faker\Generator as Faker;

class TravelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0;$i < 40;$i++){
                $_pack = new Travels();
                $_pack->destination = $faker->city();
                $_pack->departure_from=$faker->city();
                $_pack->date = $faker->date();
                $_pack->price = $faker->numberBetween(300,4000);
                $_pack->stay = $faker->numberBetween(3,21);
                $_pack->hotel = $faker->word();
                $_pack->guest_number = $faker->numberBetween(1,6);
                $_pack->img = $faker->imageUrl();
                $_pack->save();
        }
    }
}
