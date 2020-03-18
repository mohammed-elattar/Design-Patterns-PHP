<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class PhpTemplateRender implements TemplateRenderer
{
    public function render(): string
    {
        return 'PHP template render called';
    }
}
