<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  DB;
use File;
use App\Models\Builder;


class BuildersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('builders')->delete();
        $json = File::get("./database/data-sample/builders.json");
        $data = json_decode($json);


        foreach ($data as $obj) {
            \App\Models\Builder::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'description' => $obj->description,
                'location' => $obj->location
            ));
        }
    }
}
