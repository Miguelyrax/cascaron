<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'miguel',
            'email' => 'miguel_albanez_96@hotmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
