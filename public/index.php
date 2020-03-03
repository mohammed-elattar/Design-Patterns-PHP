<?php

declare(strict_types=1);

require_once __DIR__.'/Autoload.php';
use System\Autoload;
use FactoryMethod\Conceptual\Creator;
use FactoryMethod\Conceptual\ConcreteCreator1;
use FactoryMethod\Conceptual\ConcreteCreator2;

$app=new Autoload();

function clientCode(Creator $creator): void
{
    echo $creator->someOperation();
}

$creator = new ConcreteCreator1();
clientCode($creator);

echo "<br>";

$creator = new ConcreteCreator2();
clientCode($creator);
