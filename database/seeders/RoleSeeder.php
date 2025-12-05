<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        $roles = [
            ['id' => 1, 'name' => 'manager', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'user',    'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('roles')->upsert($roles, ['id'], ['name', 'updated_at']);
    }
}
