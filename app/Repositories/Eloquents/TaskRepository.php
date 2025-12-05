<?php

namespace App\Repositories\Eloquents;

use App\Models\Task;
use App\Repositories\Contracts\TaskInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class TaskRepository implements TaskInterface
{
    public function index(array $filters): LengthAwarePaginator
    {
        return Task::query()
            ->with(['assignee', 'dependencies', 'dependents'])
            ->filter($filters)
            ->orderBy('due_date', 'ASC')
            ->paginate($filters['per_page'] ?? 10, page: $filters['page'] ?? 1);
    }

    public function show(Task $task): Task
    {
        return $task->load(['assignee', 'dependencies', 'dependents']);
    }

    public function store(array $data): Task
    {
        DB::beginTransaction();

        $task = Task::updateOrCreateTask($data);

        if (!empty($data['dependencies_ids'])) {
            $task->syncDependencies($data['dependencies_ids']);
        }

        DB::commit();
        return $task->load(['assignee', 'dependencies']);
    }

    public function update(array $data, Task $task)
    {
        DB::beginTransaction();

        if (!empty($data['status']) && $data['status'] === 'completed') {
            $task->checkAllDependenciesCompleted();
        }

        $task = Task::updateOrCreateTask($data, $task);

        DB::commit();

        return $task->load(['assignee', 'dependencies']);
    }

    public function syncTaskDependencies(array $data, Task $task)
    {
        DB::beginTransaction();

        $task->syncDependencies($data['dependencies_ids']);

        DB::commit();

        return $task->load(['assignee', 'dependencies']);
    }
}
