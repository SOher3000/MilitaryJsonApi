<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MilitaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $military = [
            [
                'name' => 'Leopard 2',
                'country' => 'Germany',
                'type' => 'tank',
                'quantity' => 3500,
                'used_in' => json_encode(['Germany', 'Canada', 'Denmark'], JSON_THROW_ON_ERROR),
                'selling_in' => json_encode(['Germany', 'Canada', 'Denmark'], JSON_THROW_ON_ERROR),
                'destroyed' => 50,
                'effective' => 8,
            ],
            [
                'name' => 'Challenger 2',
                'country' => 'UK',
                'type' => 'tank',
                'quantity' => 400,
                'used_in' => json_encode(['UK', 'Oman'], JSON_THROW_ON_ERROR),
                'selling_in' => json_encode(['UK', 'Oman'], JSON_THROW_ON_ERROR),
                'destroyed' => 10,
                'effective' => 9,
            ],
            [
                'name' => 'T-90',
                'country' => 'Russia',
                'type' => 'tank',
                'quantity' => 1000,
                'used_in' => json_encode(['Russia', 'India'], JSON_THROW_ON_ERROR),
                'selling_in' => json_encode(['Russia', 'India'], JSON_THROW_ON_ERROR),
                'destroyed' => 70,
                'effective' => 0.75,
            ],
            [
                'name' => 'F-22 Raptor',
                'country' => 'USA',
                'type' => 'plane',
                'quantity' => 195,
                'used_in' => json_encode(['USA'], JSON_THROW_ON_ERROR),
                'selling_in' => json_encode(['USA'], JSON_THROW_ON_ERROR),
                'destroyed' => 1,
                'effective' => 9,
            ],
            [
                'name' => 'JAS 39 Gripen',
                'country' => 'Sweden',
                'type' => 'plane',
                'quantity' => 271,
                'used_in' => json_encode(['Sweden', 'Czech Republic', 'Hungary'], JSON_THROW_ON_ERROR),
                'selling_in' => json_encode(['Sweden', 'Czech Republic', 'Hungary'], JSON_THROW_ON_ERROR),
                'destroyed' => 5,
                'effective' => 8,
            ],
            [
                'name' => 'Type 99',
                'country' => 'China',
                'type' => 'plane',
                'quantity' => 1200,
                'used_in' => json_encode(['China'], JSON_THROW_ON_ERROR),
                'selling_in' => json_encode(['China'], JSON_THROW_ON_ERROR),
                'destroyed' => 30,
                'effective' => 8,
            ]
        ];

        DB::table('military')->insert($military);
    }
}
