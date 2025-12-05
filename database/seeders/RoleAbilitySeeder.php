<?php

namespace Database\Seeders;

use App\Enums\AbilityEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAbilitySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $roleAbilities = [];

        // Manager abilities (role_id = 1)
        $managerAbilities = [
            AbilityEnum::CREATE_TASK->value,
            AbilityEnum::UPDATE_TASK->value,
            AbilityEnum::ASSIGN_TASK->value,
            AbilityEnum::VIEW_TASKS->value,
        ];

        // User abilities (role_id = 2)
        $userAbilities = [
            AbilityEnum::VIEW_OWN_TASKS->value,
            AbilityEnum::UPDATE_OWN_TASK_STATUS->value,
        ];

        // Add manager abilities to the array
        foreach ($managerAbilities as $abilityId) {
            $roleAbilities[] = [
                'role_id'    => 1,
                'ability_id' => $abilityId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        // Add user abilities to the array
        foreach ($userAbilities as $abilityId) {
            $roleAbilities[] = [
                'role_id'    => 2,
                'ability_id' => $abilityId,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('ability_role')->upsert(
            $roleAbilities,
            ['role_id', 'ability_id'],
            ['updated_at']
        );
    }
}
