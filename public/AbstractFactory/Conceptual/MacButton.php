<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

class MacButton implements Button
{
    public function paint(): void
    {
        echo 'it\'s a Mac button<br/>';
    }
}
