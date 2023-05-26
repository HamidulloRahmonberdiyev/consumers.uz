<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        Address::create(['user_id' => 2, 'name' => 'Oqtosh']);
        Address::create(['user_id' => 2, 'name' => 'Mirbozor']);
        Address::create(['user_id' => 2, 'name' => 'Yangirabod']);
        Address::create(['user_id' => 2, 'name' => 'Parsiz']);
        Address::create(['user_id' => 2, 'name' => 'Shulluktepa']);
        Address::create(['user_id' => 2, 'name' => 'Kattaqo\'rg\'on']);
        Address::create(['user_id' => 2, 'name' => 'Oltinsoy']);
    }
}
