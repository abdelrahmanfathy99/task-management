<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\DB;

trait TaskQueryTrait
{
    /**
     * Get only IDs of all dependencies (flat list).
     */
    public function getDependencyIds(): array
    {
        $sql = <<<SQL
            WITH RECURSIVE deps AS (
                SELECT t.id, CAST(t.id AS CHAR(255)) AS path
                FROM tasks t
                WHERE t.id = ?

                UNION ALL

                SELECT
                    t2.id,
                    CONCAT(d.path, ',', t2.id) AS path
                FROM deps d
                JOIN task_dependencies td ON td.task_id = d.id
                JOIN tasks t2 ON t2.id = td.dependency_id
                WHERE FIND_IN_SET(t2.id, d.path) = 0
            )
            SELECT id FROM deps WHERE id != ? ORDER BY id;
        SQL;

        $rows = DB::select($sql, [$this->id, $this->id]);

        return array_map(fn($r) => $r->id, $rows);
    }

    /**
     * Get only IDs of all dependents (flat list).
     */
    public function getDependentIds(): array
    {
        $sql = <<<SQL
            WITH RECURSIVE deps AS (
                SELECT t.id, CAST(t.id AS CHAR(255)) AS path
                FROM tasks t
                WHERE t.id = ?

                UNION ALL

                SELECT
                    t2.id,
                    CONCAT(d.path, ',', t2.id) AS path
                FROM deps d
                JOIN task_dependencies td ON td.dependency_id = d.id
                JOIN tasks t2 ON t2.id = td.task_id
                WHERE FIND_IN_SET(t2.id, d.path) = 0
            )
            SELECT id FROM deps WHERE id != ? ORDER BY id;
        SQL;

        $rows = DB::select($sql, [$this->id, $this->id]);

        return array_map(fn($r) => $r->id, $rows);
    }
}
