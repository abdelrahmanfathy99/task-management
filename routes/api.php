<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 🧭 API Routes
|--------------------------------------------------------------------------
| Organized by middleware layers:
| - auth:sanctum                            :ensures a valid Sanctum token.
| - ability:single_or_multiple_abilities    :check user has at least one of the abilities
| - throttle:requests,minutes               :limit number of requests/minutes
*/


// 🧩 Public: no token required
Route::post('login', [AuthController::class, 'login'])->middleware('throttle:5,1');;

// 🔒 Sanctum-protected routes
Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('logout', [AuthController::class, 'logout']);

    Route::middleware(['ability:view_tasks,view_own_tasks'])->group(function () {
        Route::get('tasks', [TaskController::class, 'index']);
        Route::get('task/{task}', [TaskController::class, 'show']);
    });

    Route::post('task', [TaskController::class, 'store'])->middleware(['ability:create_task']);
    Route::post('tasks/{task}/sync-dependenices', [TaskController::class, 'syncTaskDependencies'])->middleware(['ability:update_task']);
    Route::put('task/{task}', [TaskController::class, 'update'])->middleware(['ability:update_task']);
});
