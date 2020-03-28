<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class TwigPageTemplate implements PageTemplate
{
    public function getTemplateString(): string
    {
        return 'Twig template called<br/>';
    }
}
