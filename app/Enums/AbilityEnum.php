<?php

namespace App\Enums;


enum AbilityEnum: int
{
    case CREATE_TASK            = 1;
    case UPDATE_TASK            = 2;
    case ASSIGN_TASK            = 3;
    case VIEW_TASKS             = 4;
    case VIEW_OWN_TASKS         = 5;
    case UPDATE_OWN_TASK_STATUS = 6;


    public function label(): string
    {
        return match ($this) {
            self::CREATE_TASK            => 'create_task',
            self::UPDATE_TASK            => 'update_task',
            self::ASSIGN_TASK            => 'assign_task',
            self::VIEW_TASKS             => 'view_tasks',
            self::VIEW_OWN_TASKS         => 'view_own_tasks',
            self::UPDATE_OWN_TASK_STATUS => 'update_own_task_status',
        };
    }
}
