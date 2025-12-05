<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $now = now();
        $hashedPassword = bcrypt('P@ssw0rd');

        $users = [
            [
                'id'         => 1,
                'name'       => 'Test Manager',
                'email'      => 'manager@example.com',
                'password'   => $hashedPassword,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id'         => 2,
                'name'       => 'Test User',
                'email'      => 'user@example.com',
                'password'   => $hashedPassword,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        DB::table('users')->upsert($users, ['id'], ['name', 'email', 'password', 'updated_at']);


        $roleUsers = [
            [
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role_id' => 2,
                'user_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        DB::table('role_user')->upsert(
            $roleUsers,
            ['role_id', 'user_id'],
            ['updated_at']
        );
    }
}
