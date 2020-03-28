<?php

declare(strict_types=1);

namespace App\Builder\Conceptual;

class Director
{
    /**
     * @var BuilderInterface
     */
    private $builder;

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    public function getMVP(): void
    {
        $this->builder->producePartA();
    }

    public function getCompleteProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}
