<?php

declare(strict_types=1);

namespace App\AbstractFactory\Practical;

class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate();
    }

    public function createRenderer(): TemplateRenderer
    {
        return new TwigTemplateRender();
    }
}
