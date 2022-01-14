<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karir;


class KarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Karir::factory()->count(30)->create();
    }
}
