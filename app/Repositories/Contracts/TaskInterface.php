<?php

namespace App\Repositories\Contracts;

use App\Models\Task;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface TaskInterface
{
    public function index(array $filters): LengthAwarePaginator;

    public function show(Task $task): Task;

    public function store(array $data);

    public function update(array $data, Task $task);

    public function syncTaskDependencies(array $data, Task $task);
}
