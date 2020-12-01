<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Band::class, 5)->create()->each(function ($p) {
            $p->save();
        });
    }
}
