<?php

declare(strict_types=1);

namespace App\Builder\Conceptual;

class ConcreteBuilder implements BuilderInterface
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product();
    }

    public function producePartA(): void
    {
        $this->product->data['part a'] = 'Product 1 part a';
    }

    public function producePartB(): void
    {
        $this->product->data['part b'] = 'Product 1 part b';
    }

    public function producePartC(): void
    {
        $this->product->data['part c'] = 'Product 1 part c';
    }

    public function getProduct(): Product
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}
