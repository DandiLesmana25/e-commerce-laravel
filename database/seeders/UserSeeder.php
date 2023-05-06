<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data to database
        $user = User::create([
            'name'=> 'dandi lesmana',
            'email'=> 'dandi@gmail.com',
            'email_verified_at'=> now(),
            'password'=> Hash::make('dandi123'),   //Hash::make=Bcrypt
        ]);
        $user->assignRole('admin');
    }
}
