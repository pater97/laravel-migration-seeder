<?php

use App\Pack;
use Illuminate\Database\Seeder;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packs = [
            [
                'destination' => 'Cuba',
                'departure_from' => 'Milan',
                'date' => '2022-01-31',
                'price' => 2000,
                'stay' => '2 weeks',
                'hotel' => 'Mirador de Rio',
                'treatment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ],
            [
                'destination' => 'Tokyio',
                'departure_from' => 'Milan',
                'date' => '2022-03-31',
                'price' => 4000,
                'stay' => '3 weeks',
                'hotel' => 'Fuji hotel',
                'treatment' => 'all inclusive',
                'guest_number' => 4,
                'disponibility' => true
            ],
            [
                'destination' => 'London',
                'departure_from' => 'Rome',
                'date' => '2022-02-21',
                'price' => 700,
                'stay' => '1 weeks',
                'hotel' => 'The Gate',
                'treatment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ],
            [
                'destination' => 'Madrid',
                'departure_from' => 'Milan',
                'date' => '2022-04-01',
                'price' => 300,
                'stay' => '1 weeks',
                'hotel' => 'Lo splendor',
                'treatment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ]
            ];

            foreach($packs as $pack){
                $_pack = new Pack();
                $_pack->destination = $pack['destination'];
                $_pack->departure_from = $pack['departure_from'];
                $_pack->date = $pack['date'];
                $_pack->price = $pack['price'];
                $_pack->stay = $pack['stay'];
                $_pack->hotel = $pack['hotel'];
                $_pack->treatment = $pack['treatment'];
                $_pack->guest_number = $pack['guest_number'];
                $_pack->disponibility = $pack['disponibility'];
                $_pack->save();
            };
    }
}
