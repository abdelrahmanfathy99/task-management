<?php

namespace Database\Seeders;

use App\Enums\AbilityEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $abilities = [];

        foreach (AbilityEnum::cases() as $ability) {
            $abilities[] = [
                'id'         => $ability,
                'name'       => $ability->label(),
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('abilities')->upsert($abilities, ['id'], ['name', 'updated_at']);
    }
}
