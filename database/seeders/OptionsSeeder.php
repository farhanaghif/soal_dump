<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['A','B','C','D','E'];
        for ($i = 1; $i <= 125; $i++) { 
            foreach ($options as $isiOption) {
                Option::create([
                    'question_id' => $i,
                    'option' => $isiOption,
                ]);
            // echo "ini question id yg ke-$i dengan option = $isiOption\n";
            }
        }
    }
}
