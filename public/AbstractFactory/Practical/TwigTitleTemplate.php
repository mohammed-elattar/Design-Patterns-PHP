<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return 'Twig template string called';
    }
}
