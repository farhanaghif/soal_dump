<?php

namespace Database\Seeders;

use App\Models\TypeQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeID = 1;
        for ($i = 1; $i <= 125; $i++) { 
            TypeQuestion::create([
                'type_id' => $typeID,
                'question_id' => $i,
            ]);
            $bagi = $i % 5;
            if ($bagi == 0) {
                $typeID = $typeID + 1;
            }
        }
    }
}
