<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('houses'); //Eliminamos el directorio con todo lo que tiene adentro
        Storage::makeDirectory('houses');
        $this->call(UserSeed::class);
        $this->call(PriceSeed::class);
        $this->call(HouseSeeder::class);
    }
}
