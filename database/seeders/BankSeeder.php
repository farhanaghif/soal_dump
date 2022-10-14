<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [1, 2];
        foreach ($category as $isiCategory) {
            if ($isiCategory == 1) {
                $name = ['Penalaran Umum','Pengetahuan Kuantitatif','Pengetahuan dan Pemahaman Umum','Memahami Bacaan dan Menulis'];
                foreach ($name as $isiName) {
                    $isiSlug = Str::slug($isiName);
                    $data = [
                        'name' => $isiName,
                        'slug' => "tps-$isiSlug",
                        'description' => fake()->paragraph(1),
                        'category_id' => 1,
                    ];
                    Bank::create($data);
                }
            } else {
                $data = [
                    'name' => 'Kedinasan',
                    'slug' => 'twk-kedinasan',
                    'description' => fake()->paragraph(1),
                    'category_id' => 2,
                ];
                Bank::create($data);
            }
        }
    }
}
