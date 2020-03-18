<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

class MacFactory implements GuiFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
