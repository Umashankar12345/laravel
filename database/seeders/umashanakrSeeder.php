<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\umashankar;

class umashanakrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        umashankar::create([
            'name' =>  'umashanakr',
            'email' => 'umashankar@gmail.com'
        ]);
    }
}
