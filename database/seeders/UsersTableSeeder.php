<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin user
        $user = User::create([
            'name' => 'Solar Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);

    }
}
