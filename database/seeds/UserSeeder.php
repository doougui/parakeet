<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => env('DEFAULT_USER_USERNAME', 'tester'),
            'name' => env('DEFAULT_USER_NAME', 'Testing Tester'),
            'email' => env('DEFAULT_USER_EMAIL', 'tester@tester.com'),
            'password' => Hash::make(env('DEFAULT_USER_PASSWORD', '12345678')),
        ]);
    }
}
