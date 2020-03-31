<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use App\AbstractFactory\Conceptual\GuiFactory;
use App\AbstractFactory\Conceptual\MacFactory;
use App\AbstractFactory\Conceptual\WinFactory;
use App\AbstractFactory\Practical\PhpTemplateFactory;
use App\AbstractFactory\Practical\TemplateFactory;
use App\Builder\Conceptual\Client;
use App\Builder\Practical\MysqlQueryBuilder;
use App\Builder\Practical\PostgresQueryBuilder;
use App\Builder\Practical\SqlBuilderClientCode;
use App\FactoryMethod\Conceptual\ConcreteCreator1;
use App\FactoryMethod\Conceptual\ConcreteCreator2;
use App\FactoryMethod\Conceptual\Creator;
use App\FactoryMethod\Practical\FacebookPoster;
use App\FactoryMethod\Practical\LinkedinPoster;
use App\FactoryMethod\Practical\SocialNetworkPoster;

/** Factory Method Conceptual Call */
function factoryMethodCode(Creator $creator): void
{
    echo $creator->someOperation();
}

$creator = new ConcreteCreator1();
factoryMethodCode($creator);
echo "<br/><br/>";

$creator = new ConcreteCreator2();
factoryMethodCode($creator);
echo "<br/><br/>";
/** End Factory Method Conceptual Call */


/** Factory Method Practical Calls */
function practicalFactoryMethodCode(SocialNetworkPoster $socialNetworkPoster): void
{
    $socialNetworkPoster->post('Hello world');
    $socialNetworkPoster->post('Its working fine now');
}

$linkedinPoster = new LinkedinPoster('mseel3ttar@linkedin.com', '123456789');
practicalFactoryMethodCode($linkedinPoster);
echo "<br/><br/>";

$facebookPoster = new FacebookPoster('mseel3ttar@faceebook.com', '123456789');
practicalFactoryMethodCode($facebookPoster);
echo "<br/><br/>";
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
echo "<br/><br/>";
conceptualAbstractFactory(new MacFactory());
echo "<br/><br/>";
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
echo "<br/><br/>";
/** End Abstract Factory practical */

/** Start Builder Pattern */
$client = new Client();
$client->clientCode();
echo "<br/><br/>";

$client = new SqlBuilderClientCode();
echo "Testing MySQL query builder: <br/>";
$client->clientCode(new MysqlQueryBuilder());

echo "<br/><br/>";

echo "Testing PostgresSQL query builder: <br/><br/>";
$client->clientCode(new PostgresQueryBuilder());
echo "<br/><br/>";
/** End Builder Pattern */

/** Start Singleton Pattern */
$config = \App\Singleton\Config::getInstance();
$config->setConfig(
    '{"dsn":"mysql:host=localhost;dbname=test","user":"test","pass":"test"}'
);
// Init the db connection (which depends on the Config singleton)
$db = \App\Singleton\Database::getInstance();
$db1 = \App\Singleton\Database::getInstance();
$db2 = \App\Singleton\Database::getInstance();
var_dump($db1,$db2,$db);
echo "<br/><br/>";
/** End Singleton Pattern */
