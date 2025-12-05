<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\FilterTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Repositories\Contracts\TaskInterface;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct(protected TaskInterface $taskrepository) {}

    public function index(FilterTaskRequest $request)
    {
        return $this->taskrepository->index($request->validated());
    }

    public function show(Task $task)
    {
        return $this->taskrepository->show($task);
    }

    public function store(CreateTaskRequest $request)
    {
        return $this->taskrepository->store($request->validated());
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        return $this->taskrepository->update($request->validated(), $task);
    }

    public function syncTaskDependencies(Request $request, Task $task)
    {
        return $this->taskrepository->syncTaskDependencies($request->validated(), $task);
    }
}
