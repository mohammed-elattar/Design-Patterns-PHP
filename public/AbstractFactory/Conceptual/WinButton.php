<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

class WinButton implements Button
{
    public function paint(): void
    {
        echo 'it\'s a windows button<br/>';
    }
}
