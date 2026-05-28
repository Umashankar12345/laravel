<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Practice;
class practicesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $practice = collect([ 
         [
             'name' => 'umas',
    'email' => 'umashggganakar9572@gmail.com',
    'city' => 'delhi',
    'percenatage' => '80%'
            
         ],
         [
             'name' => 'Dhiraj',
    'email' => 'uraar9572@gmail.com',
    'city' => 'pune',
    'percenatage' => '85%'
         ],
        [
             'name' => 'omm',
    'email' => 'omm9572@gmail.com',
    'city' => 'kolkata',
    'percenatage' => '89%'
         ]
         
          ]);
        $practice->each(function($practice){
            Practice::insert($practice);
        });

//         Practice::create([
//     'name' => 'uma',
//     'email' => 'umashankar9572@gmail.com',
//     'city' => 'Bangalore',
//     'percenatage' => '80%'
// ]);
    }
}
