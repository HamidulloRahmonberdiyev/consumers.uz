<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'Hamidullo',
            'surname' => 'Rahmonberdiyev',
            'email' => 'hamidullo0760@gmail.com',
            'phone' => '+998912500760',
            'password' => Hash::make('hamidullo0760'),
            'photo' => '',
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Salohiddin',
            'surname' => 'Ayyubov',
            'email' => 'salohiddin@gmail.com',
            'phone' => '+998918522277',
            'password' => Hash::make('salohiddin'),
            'photo' => '',
        ]);
    }
}
