<?php

declare(strict_types=1);

namespace App\Builder\Practical;

class MysqlQueryBuilder implements SqlQueryBuilder
{
    private const SELECT_TYPE = 'select';
    private const UPDATE_TYPE = 'select';
    private const DELETE_TYPE = 'select';
    protected $query;

    public function reset(): void
    {
        $this->query = new \stdClass();
    }
    public function select(string $tableName, array $fields): SqlQueryBuilder
    {
      $this->reset();
      $this->query->base = sprintf("select %s from %s",implode(',', $fields), $tableName);
      $this->query->type = self::SELECT_TYPE;

      return $this;
    }

    public function where(string $fieldName, string $value, string $operator): SqlQueryBuilder
    {
        if (!in_array($this->query->type, [self::SELECT_TYPE , self::UPDATE_TYPE, self::DELETE_TYPE])) {
            throw new \Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }

        $this->query->where[] = sprintf("%s %s '%s'", $fieldName, $operator, $value);

        return $this;
    }

    public function limit(int $start, int $offset): SqlQueryBuilder
    {
        if ($this->query->type !== self::SELECT_TYPE) {
            throw new \Exception("LIMIT can only be added to SELECT");
        }

        $this->query->limit = sprintf(' limit %s , %s',$start, $offset);
        return $this;
    }

    public function getSql(): string
    {
        $query = $this->query;

        $sql = $query->base;
        if(count($query->where)) {
            $sql .= sprintf(' where %s', implode(',', $query->where));
        }

        if(!empty($query->limit)) {
            $sql .= sprintf('%s ;', $query->limit);
        }

        return $sql;
    }
}
