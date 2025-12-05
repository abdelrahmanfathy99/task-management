<?php

use App\Http\Middleware\CheckAbility;
use App\Http\Middleware\HandleLocale;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'ability' => CheckAbility::class,
        ]);

        $middleware->api(append: [
            'handle_locale' => HandleLocale::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (\Throwable $e) {
            Log::error(sprintf(
                '[%s] %s in %s:%d',
                get_class($e),
                $e->getMessage(),
                $e->getFile(),
                $e->getLine()
            ), [
                'trace' => $e->getTraceAsString(),
            ]);

            if ($e instanceof HttpException && $e->getStatusCode() == 403 || $e instanceof AuthorizationException) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], 403);
            }

            if ($e instanceof ValidationException) {
                return response()->json([
                    'message' => __('messages.validation_failed'),
                    'errors'  => $e->errors()
                ], 422);
            }

            if ($e instanceof NotFoundHttpException) {
                return response()->json([
                    'message' => $e->getMessage(),
                ], $e->getStatusCode());
            }


            return response()->json([
                'message' => $e->getMessage(),
            ], 400);
        });
    })->create();
