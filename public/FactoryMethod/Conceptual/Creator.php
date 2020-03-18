<?php

declare(strict_types=1);

namespace App\FactoryMethod\Conceptual;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
       return $this->factoryMethod()->operation();
    }
}
