<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

class MacCheckbox implements Checkbox
{
    public function paint(): void
    {
        echo 'it\'s a Mac Checkbox<br/>';
    }
}
