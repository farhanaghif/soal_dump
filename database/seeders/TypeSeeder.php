<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bankID = [1,2,3,4,5];
        $type = ['Latihan','TryOut1','TryOut2','TryOut3','TryOut4'];
        foreach ($bankID as $no) {
            foreach ($type as $item) {
                $data = [                
                    'type' => $item,
                    'bank_id' => $no,
                ];
                Type::create($data);
            }
        }
    }
}
