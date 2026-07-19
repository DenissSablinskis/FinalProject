<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@gaisma.lv',
            'password' => Hash::make('admin1234'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'Operator',
            'email' => 'operator@gaisma.lv',
            'password' => Hash::make('operator1234'),
            'role' => 'operator',
        ]);

        User::create([
            'username' => 'Courier',
            'email' => 'courier@gaisma.lv',
            'password' => Hash::make('courier1234'),
            'role' => 'courier',
        ]);

         User::create([
            'username' => 'Customer',
            'email' => 'customer@gaisma.lv',
            'password' => Hash::make('customer1234'),
            'role' => 'customer',
        ]);
    }
}
