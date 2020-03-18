<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

interface GuiFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
