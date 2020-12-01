<?php

namespace Database\Seeders;

use  DB;
use File;
use App\Bike;

use Illuminate\Database\Seeder;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bikes')->delete();
        $json = File::get("./database/data-sample/bikes.json");
        $data = json_decode($json);

        foreach ($data as $obj) {
            \App\Models\Bike::create(array(
                    'id' => $obj->id,
                    'make' => $obj->make,
                    'model' => $obj->model,
                    'year' => $obj->year,
                    'mods' => $obj->mods,
                    'picture'=> $obj->picture));
        }
    }
}
