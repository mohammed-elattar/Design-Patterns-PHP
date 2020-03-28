<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class TwigTemplateRender implements TemplateRenderer
{
    public function render(): string
    {
        return 'Twig template render called<br/>';
    }
}
