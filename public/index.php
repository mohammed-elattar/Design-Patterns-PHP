<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use App\FactoryMethod\Conceptual\Creator;
use App\FactoryMethod\Conceptual\ConcreteCreator1;
use App\FactoryMethod\Conceptual\ConcreteCreator2;
use App\FactoryMethod\Practical\SocialNetworkPoster;
use App\FactoryMethod\Practical\FacebookPoster;
use App\FactoryMethod\Practical\LinkedinPoster;
use App\AbstractFactory\Conceptual\WinFactory;
use App\AbstractFactory\Conceptual\MacFactory;
use App\AbstractFactory\Conceptual\GuiFactory;
use App\AbstractFactory\Practical\PhpTemplateFactory;
use App\AbstractFactory\Practical\TemplateFactory;

/** Factory Method Conceptual Call */
function factoryMethodCode(Creator $creator): void
{
    echo $creator->someOperation();
}

$creator = new ConcreteCreator1();
factoryMethodCode($creator);

$creator = new ConcreteCreator2();
factoryMethodCode($creator);
/** End Factory Method Conceptual Call */


/** Factory Method Practical Calls */
function practicalFactoryMethodCode(SocialNetworkPoster $socialNetworkPoster): void
{
    $socialNetworkPoster->post('Hello world');
    $socialNetworkPoster->post('Its working fine now');
}

$linkedinPoster = new LinkedinPoster('mseel3ttar@linkedin.com', '123456789');
practicalFactoryMethodCode($linkedinPoster);

$facebookPoster = new FacebookPoster('mseel3ttar@faceebook.com', '123456789');
practicalFactoryMethodCode($facebookPoster);
/** End Factory Method Practical Call */

/** Start Abstract Factory Conceptual */
function conceptualAbstractFactory(GuiFactory $guiFactory): void
{
    $button = $guiFactory->createButton();
    $button->paint();

    $checkbox = $guiFactory->createCheckbox();
    $checkbox->paint();
}

conceptualAbstractFactory(new WinFactory());
conceptualAbstractFactory(new MacFactory());
/** End Abstract Factory Conceptual */

/** Start Abstract Factory practical */
class Page
{
    public function render(TemplateFactory $factory): void
    {
        echo $factory->createPageTemplate()->getTemplateString();

        $renderer = $factory->createRenderer();

        echo $renderer->render();
    }
}

$page = new Page();
echo $page->render(new PhpTemplateFactory());
/** End Abstract Factory practical */
