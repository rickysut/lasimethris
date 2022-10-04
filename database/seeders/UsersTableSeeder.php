<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'username'       => 'admin',
                'roleaccess'     => 1,
            ],
            [
                'id'             => 2,
                'name'           => 'User1',
                'email'          => 'user@user.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'username'       => 'user1',
                'roleaccess'     => 2,
            ],
        ];

        User::insert($users);
    }
}
