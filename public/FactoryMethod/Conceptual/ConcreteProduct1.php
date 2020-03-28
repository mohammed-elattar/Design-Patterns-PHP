<?php

declare(strict_types=1);

namespace App\FactoryMethod\Conceptual;

class ConcreteProduct1 implements Product
{
    public function operation(): string
    {
        return 'product 1 called<br/>';
    }
}
