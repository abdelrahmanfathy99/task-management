<?php

namespace App\Http\Traits;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

trait PaginationTrait
{
    public function getPaginationMeta(LengthAwarePaginator $paginator): array
    {
        return [
            'current_page' => $paginator->currentPage(),
            'per_page'     => $paginator->perPage(),
            'total'        => $paginator->total(),
            'last_page'    => $paginator->lastPage(),
        ];
    }

    public function getPerPage(int $default = 10): int
    {
        $perPage = request()->get('per_page', $default);
        return is_numeric($perPage) && $perPage > 0 ? (int) $perPage : $default;
    }

    public function getPage(): int
    {
        $page = request()->get('page', 1);
        return is_numeric($page) && $page > 0 ? (int) $page : 1;
    }
}
