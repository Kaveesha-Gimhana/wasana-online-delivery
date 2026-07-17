<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* User::create([
            'name' => 'Admin',
            'email' => 'gimhanak2003@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]); */

        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ]
        );
        User::updateOrCreate(
            ['email' => 'gimhanak2003@gmail.com'],
            [
                'name' => 'Gimhana',
                'password' => Hash::make('2275'),
                'role' => 'admin'
            ]
        );
        User::updateOrCreate(
            ['email' => 'hansani2004wasanabakers@gmail.com'],
            [
                'name' => 'Hansani',
                'password' => Hash::make('Hansani@2004'),
                'role' => 'admin'
            ]
        );

    }
}
