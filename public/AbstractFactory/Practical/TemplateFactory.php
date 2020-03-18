<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function createRenderer(): TemplateRenderer;
}
