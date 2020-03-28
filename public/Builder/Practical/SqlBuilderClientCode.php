<?php

declare(strict_types=1);

namespace App\Builder\Practical;

class SqlBuilderClientCode
{
    function clientCode(SQLQueryBuilder $queryBuilder)
    {
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", '18', ">")
            ->where("age", '30', "<")
            ->limit(10, 20)
            ->getSQL();

        echo $query;
    }
}
