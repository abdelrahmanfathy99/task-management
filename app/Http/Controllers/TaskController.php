<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\FilterTaskRequest;
use App\Http\Requests\syncTaskDependenciesRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Http\Traits\PaginationTrait;
use App\Models\Task;
use App\Repositories\Contracts\TaskInterface;

class TaskController extends Controller
{
    use PaginationTrait;

    public function __construct(protected TaskInterface $taskrepository) {}

    public function index(FilterTaskRequest $request)
    {
        $tasks = $this->taskrepository->index($request->validated());

        return response()->json([
            'tasks' => TaskResource::collection($tasks),
            'meta'  => $this->getPaginationMeta($tasks)
        ], 200);
    }

    public function show(Task $task)
    {
        $task = $this->taskrepository->show($task);

        return response()->json(['task' => new TaskResource($task)], 200);
    }

    public function store(CreateTaskRequest $request)
    {
        $task = $this->taskrepository->store($request->validated());

        return response()->json(['task' => new TaskResource($task)], 201);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task = $this->taskrepository->update($request->validated(), $task);

        return response()->json(['task' => new TaskResource($task)], 200);
    }

    public function syncTaskDependencies(syncTaskDependenciesRequest $request, Task $task)
    {
        $task = $this->taskrepository->syncTaskDependencies($request->validated(), $task);

        return response()->json(['task' => new TaskResource($task)], 200);
    }
}
