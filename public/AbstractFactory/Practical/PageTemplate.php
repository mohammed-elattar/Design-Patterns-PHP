<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

interface PageTemplate
{
    public function getTemplateString(): string;
}
