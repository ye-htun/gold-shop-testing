<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $customers = [
           [
            'id'  => 1,
            'name' => 'Luffy',
            'phone' => '0978676767',
            'address'   => 'NihonJin'
           ],
           [
            'id'  => 2,
            'name' => 'Nami',
            'phone' => '09545688',
            'address'   => 'Tokyo',
           ],
        ];

        Customer::insert($customers);
    }
}
