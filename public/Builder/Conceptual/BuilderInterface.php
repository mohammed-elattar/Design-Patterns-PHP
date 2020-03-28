<?php

declare(strict_types=1);

namespace App\Builder\Conceptual;

interface BuilderInterface
{
    public function producePartA(): void;
    public function producePartB(): void;
    public function producePartC(): void;
}
