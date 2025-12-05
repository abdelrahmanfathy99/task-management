<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    protected $guarded = [];

    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }

    public function dependencies(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'task_dependencies', 'task_id', 'dependency_id');
    }

    public function dependents(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'task_dependencies', 'dependency_id', 'task_id');
    }

    public function scopeFilter(Builder $query, array $data): Builder
    {
        $user = Auth::user();

        if ($user->hasAbility('view_tasks') && !empty($data['assignee_ids'])) {
            $query->whereIn('assignee_id', $data['assignee_ids']);
        } else if ($user->hasAbility('view_own_tasks')) {
            $query->where('assignee_id', $user->id);
        } else {
            return $query->whereRaw('1 = 0');
        }

        $query
            ->when(!empty($data['status']), function ($q) use ($data) {
                $q->where('status', $data['status']);
            })

            ->when(!empty($data['from_date']), function ($q) use ($data) {
                $q->whereDate('due_date', '>=', $data['from_date']);
            })

            ->when(!empty($data['to_date']), function ($q) use ($data) {
                $q->whereDate('due_date', '<=', $data['to_date']);
            })

            ->when(!empty($data['search']), function ($q) use ($data) {
                $q->where('title', 'LIKE', '%' . $data['search'] . '%');
            });

        return $query;
    }

    public static function updateOrCreateTask(array $data, ?Task $task = null): Task
    {
        return Task::updateOrCreate(
            ['id' => $task?->id],
            [
                'title'       => $data['title'],
                'description' => $data['description'] ?? null,
                'assignee_id' => $data['assignee_id'] ?? null,
                'status'      => $data['status'] ?? 'pending',
                'due_date'    => $data['due_date'] ?? null,
            ]
        );
    }

    public function syncDependencies(array $ids): void
    {
        // Task can not depend on itself
        $ids = array_values(array_filter(array_unique($ids), fn($id) => $id != $this->id));

        if (empty($ids)) {
            return;
        }

        if ($this->status === 'completed') {
            $incomplete = Task::whereIn('id', $ids)->where('status', '!=', 'completed')->exists();

            if ($incomplete) {
                $this->update(['status' => 'pending']);
            }
        }

        $this->dependencies()->sync($ids);
    }

    public function checkAllDependenciesCompleted(): void
    {
        if ($this->dependencies()->where('status', '!=', 'completed')->exists()) {
            throw new ValidationException(__('messages.cannot_complete_task_some_dependecies_are_not_completed_yet'));
        }
    }
}
