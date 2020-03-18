<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class PhpPageTemplate implements PageTemplate
{
    public function getTemplateString(): string
    {
        return 'php template called';
    }
}
