<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BeasiswaSeeder::class);
        $this->call(KarirSeeder::class);
        $this->call(PelatihanSeeder::class);
    }
}
