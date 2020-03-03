<?php

declare(strict_types=1);

namespace Attar\DesignPatterns\FactoryMethod\Conceptual;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return 'product 1 called';
    }
}
