<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 125; $i++) { 
            Question::create([
                'question' => fake()->paragraph(1),
                'correct' => fake()->randomElement(['A','B','C','D','E']),
                'pembahasan' => fake()->paragraph(1),
            ]);
        }
    }
}
