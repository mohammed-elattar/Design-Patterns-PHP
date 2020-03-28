<?php

declare(strict_types=1);

namespace App\Builder\Practical;

interface SqlQueryBuilder
{
    public function select(string $tableName, array $fields): self;
    public function where(string $fieldName, string $value, string $operator): self;
    public function limit(int $start, int $offset): self;
}
