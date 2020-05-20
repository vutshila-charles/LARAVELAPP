<?php

use Illuminate\Database\Seeder;
use App\Cars;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CartableSeeder::class);
    }
}
