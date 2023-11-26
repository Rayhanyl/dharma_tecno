<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email'             => 'admin@mail.com',
            'password'          => 'qwerty',
            'first_name'        => 'Admin',
            'last_name'         => 'DTI',
            'phone_number'      => '08129312399',
            'role'              => 'admin'
        ]);
    }
}
