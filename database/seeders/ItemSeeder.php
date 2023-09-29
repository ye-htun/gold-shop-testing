<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'id'       => 1,
                'name' => 'Yellow Gold',
                'item_code' => '001',
                'description' => 'This is Yellow Gold ',
                'price'     => 520000,
                'kyat'      => 5,
                'yway'      => 9 ,
                'image'     => '1695972558images.jpg',
            ],
            [
                'id'       => 2,
                'name' => 'White Gold',
                'item_code' => '002',
                'description' => 'This is White Gold ',
                'price'     => 540000,
                'kyat'      => 45,
                'yway'      => 21,
                'image'     => '1695972354HMM Logo.png',
            ],
        ];

        Item::insert($items);
    }
}
