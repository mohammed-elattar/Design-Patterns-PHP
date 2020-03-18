<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

class WinCheckbox implements Checkbox
{
    public function paint(): void
    {
        echo 'it\'s a Win Checkbox';
    }
}
