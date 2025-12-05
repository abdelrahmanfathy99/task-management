<?php

namespace App\Repositories\Eloquents;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\Contracts\AuthInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthInterface
{

    public function login(array $data): ?array
    {
        DB::beginTransaction();

        $user = User::where('email', $data['email'])->first();

        if (! $user || ! Hash::check($data['password'], $user->password)) {
            return null;
        }

        DB::commit();

        return [
            'token' => $user->createToken('api')->plainTextToken,
            'user'  => new UserResource($user),
        ];
    }

    public function logout()
    {
        DB::beginTransaction();

        request()->user()->currentAccessToken()->delete();

        DB::commit();
    }
}
