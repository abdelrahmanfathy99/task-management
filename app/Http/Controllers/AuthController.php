<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repositories\Contracts\AuthInterface;

class AuthController extends Controller
{
    public function __construct(protected AuthInterface $authrepository) {}

    public function login(LoginRequest $request)
    {
        $data = $this->authrepository->login($request->validated());

        if (! $data) {
            return response()->json(['message' => __('auth.failed')], 401);
        }

        return response()->json(['message' => __('auth.success'), 'data' => $data], 200);
    }

    public function logout()
    {
        $this->authrepository->logout();

        return response()->json(['message' => __('auth.logout')], 200);
    }
}
