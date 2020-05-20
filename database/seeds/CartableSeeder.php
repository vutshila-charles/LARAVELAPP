<?php

use Illuminate\Database\Seeder;
use App\Car;
class CartableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Car::create([

            'regNo' =>'BMW',
            'slug' => '320i',
            'details' =>'color Blue',
            'description'=> 'very fast',
            'price'=>'400000',


        ]);
    }
}
