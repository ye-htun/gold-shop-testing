<?php

namespace Database\Seeders;

use App\Models\CustomerOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }
    public function run()
    {
        //
        $customerorders = [
           [
            'id'  => 1,
            'item_id' => '1',
            'customer_id' => 2,
            'confirm_status'   => 1,
            'confirm_price'   => 54000,
            'org_price'     => 520000,
            'remark'    => 'Hello World',
           ],
           [
            'id'  => 2,
            'item_id' => '2',
            'customer_id' => 1,
            'confirm_status'   => 0,
            'confirm_price'   => 25000,
            'org_price'     => 24000,
            'remark'    => 'Hello World',
           ],
        ];

        CustomerOrder::insert($customerorders);
    }
}
