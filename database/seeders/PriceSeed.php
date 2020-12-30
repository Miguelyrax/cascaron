<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name'=>'$1000000'
        ]);
        Price::create([
            'name'=>'$3000000'
        ]);
        Price::create([
            'name'=>'$5000000'
        ]);
    }
}
