<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class PhpTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return 'php template string called<br/>';
    }
}
