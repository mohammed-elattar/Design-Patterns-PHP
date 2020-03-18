<?php

declare(strict_types=1);

namespace App\AbstractFactory\Conceptual;

class WinFactory implements GuiFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}
