<?php

namespace App\Repositories\Contracts;

interface AuthInterface
{
    public function login(array $data): ?array;

    public function logout();
}
