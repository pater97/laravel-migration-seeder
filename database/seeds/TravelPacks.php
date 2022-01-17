<?php

use App\Pack;
use Illuminate\Database\Seeder;

class TravelPacks extends Seeder
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
                'date' => 21/10/1997,
                'price' => 2000,
                'stay' => '2 weeks',
                'hotel' => 'Mirador de Rio',
                'tratment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ],
            [
                'destination' => 'Cuba',
                'departure_from' => 'Milan',
                'date' => 21/10/1997,
                'price' => 2000,
                'stay' => '2 weeks',
                'hotel' => 'Mirador de Rio',
                'tratment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ],
            [
                'destination' => 'Cuba',
                'departure_from' => 'Milan',
                'date' => 21/10/1997,
                'price' => 2000,
                'stay' => '2 weeks',
                'hotel' => 'Mirador de Rio',
                'tratment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ],
            [
                'destination' => 'Cuba',
                'departure_from' => 'Milan',
                'date' => 21/10/1997,
                'price' => 2000,
                'stay' => '2 weeks',
                'hotel' => 'Mirador de Rio',
                'tratment' => 'all inclusive',
                'guest_number' => 2,
                'disponibility' => true
            ]
            ];

            @foreach($packs as $pack){
                $_pack = new Pack();
                $_pack->destination = $pack['destination'];
                $_pack->departure_from = $pack['departure_from'];
                $_pack->date = $pack['date'];
                $_pack->price = $pack['price'];
                $_pack->stay = $pack['stay'];
                $_pack->hotel = $pack['hotel'];
                $_pack->tratment = $pack['tratment'];
                $_pack->guest_number = $pack['guest_number'];
                $_pack->disponibility = $pack['disponibility'];
            }
    }
}
