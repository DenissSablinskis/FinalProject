<?php

namespace Database\Seeders;

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

        // Operators

        User::create([
            'username' => 'laura.ozola',
            'name' => 'Laura',
            'surname' => 'Ozola',
            'email' => 'laura.ozola@gaisma.lv',
            'password' => Hash::make('laura1234'),
            'role' => 'operator',
        ]);

        User::create([
            'username' => 'martins.kalnins',
            'name' => 'Mārtiņš',
            'surname' => 'Kalniņš',
            'email' => 'martins.kalnins@gaisma.lv',
            'password' => Hash::make('martins1234'),
            'role' => 'operator',
        ]);

        User::create([
            'username' => 'elina.berzina',
            'name' => 'Elīna',
            'surname' => 'Bērziņa',
            'email' => 'elina.berzina@gaisma.lv',
            'password' => Hash::make('elina1234'),
            'role' => 'operator',
        ]);

        // Couriers

        User::create([
            'username' => 'janis.liepins',
            'name' => 'Jānis',
            'surname' => 'Liepiņš',
            'email' => 'janis.liepins@gaisma.lv',
            'password' => Hash::make('janis1234'),
            'role' => 'courier',
        ]);

        User::create([
            'username' => 'kristine.kalnina',
            'name' => 'Kristīne',
            'surname' => 'Kalniņa',
            'email' => 'kristine.kalnina@gaisma.lv',
            'password' => Hash::make('kristine1234'),
            'role' => 'courier',
        ]);

        User::create([
            'username' => 'andris.ozols',
            'name' => 'Andris',
            'surname' => 'Ozols',
            'email' => 'andris.ozols@gaisma.lv',
            'password' => Hash::make('andris1234'),
            'role' => 'courier',
        ]);

        // Customers

        User::create([
            'username' => 'anna.kalnina',
            'name' => 'Anna',
            'surname' => 'Kalniņa',
            'email' => 'anna.kalnina@gaisma.lv',
            'password' => Hash::make('anna1234'),
            'role' => 'customer',
        ]);

        User::create([
            'username' => 'rihards.ozols',
            'name' => 'Rihards',
            'surname' => 'Ozols',
            'email' => 'rihards.ozols@gaisma.lv',
            'password' => Hash::make('rihards1234'),
            'role' => 'customer',
        ]);

        User::create([
            'username' => 'sofija.berzina',
            'name' => 'Sofija',
            'surname' => 'Bērziņa',
            'email' => 'sofija.berzina@gaisma.lv',
            'password' => Hash::make('sofija1234'),
            'role' => 'customer',
        ]);
    }
}
