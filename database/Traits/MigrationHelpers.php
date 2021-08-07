<?php

namespace Database\Traits;

use Illuminate\Support\Facades\Schema;

trait MigrationHelpers
{
    public function createTableIfNotExists(string $tableName, callable $callback): bool
    {
        if (Schema::hasTable(table: $tableName)) {
            return false;
        }

        Schema::create(table: $tableName, callback: $callback);

        return true;
    }
}
