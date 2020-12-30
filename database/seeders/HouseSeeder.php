<?php

namespace Database\Seeders;

use App\Models\House;
use App\Models\Image;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        
       $houses =  House::factory(5)->create();
        foreach($houses as $house){
            Image::factory(1)->create([
                'imageable_id' => $house->id,
                'imageable_type' => 'App\Models\House'
            ]);
        }

    }
}
