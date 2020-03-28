<?php

declare(strict_types=1);

namespace App\Builder\Conceptual;

class Product
{
    /**
     * @var array
     */
    public $data = [];

    public function listParts(): void
    {
        echo sprintf('Product Parts %s <br/>', implode(',',$this->data));
    }
}
