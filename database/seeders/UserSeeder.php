<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'test_user1',
            'email' => 'demo1234@gmail.com',
            'password' => Hash::make('demo1234'),
            'email_verified_at' => new \DateTime(),
            'is_admin' => true
        ]);
    }
}
