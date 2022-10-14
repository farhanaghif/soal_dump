<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bank;
use App\Models\BankQuestion;
use App\Models\Category;
use App\Models\Option;
use App\Models\Question;
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
        $this->call(CategorySeeder::class);
        $this->call(BankSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(TypeQuestionSeeder::class);
    }
}
