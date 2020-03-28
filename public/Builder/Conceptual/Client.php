<?php

declare(strict_types=1);

namespace App\Builder\Conceptual;

class Client
{
    public function clientCode(): void
    {
        $director = new Director();
        $builder = new ConcreteBuilder();
        $director->setBuilder($builder);

        echo "Complete product:<br/>";
        $director->getCompleteProduct();
        $builder->getProduct()->listParts();

        echo "MVP product:<br/>";
        $director->getMVP();
        $builder->getProduct()->listParts();

        // Remember, the Builder pattern can be used without a Director class.
        echo "Custom product:<br/>";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
