<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Store;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@rentgo.id',
                'role' => 'admin',
                'password' => 'password',
            ],
            [
                'name' => 'User',
                'last_name' => 'User',
                'email' => 'user@rentgo.id',
                'role' => 'user',
                'password' => 'password',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
