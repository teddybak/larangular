<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  DB;
use File;
use App\Bike;


class BikesGaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bike_garage')->insert([
            'bike_id' => 1,
            'garage_id' => 2
        ]);
        DB::table('bike_garage')->insert([
            'bike_id' => 2,
            'garage_id' => 2
        ]);
    }
}
