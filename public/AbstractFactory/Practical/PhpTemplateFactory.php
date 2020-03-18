<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class PhpTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PhpTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PhpPageTemplate();
    }

    public function createRenderer(): TemplateRenderer
    {
        return new PhpTemplateRender();
    }
}
