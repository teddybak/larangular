<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use File;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get("./database/data-sample/bikes.json");


        $data = json_decode($json);




        foreach ($data as $obj) {
            \App\Models\Bike::create(array(
                     'id' => $obj->id,
                     'make' => $obj->make,
                     'model' => $obj->model,
                     'year' => $obj->year,
                     'mods' => $obj->mods,
                     'picture'=> $obj->picture)
                 );

         }
    }
}
