<?php

declare(strict_types=1);

require_once __DIR__.'/Autoload.php';
use System\Autoload;
use FactoryMethod\Conceptual\Creator;
use FactoryMethod\Conceptual\ConcreteCreator1;
use FactoryMethod\Conceptual\ConcreteCreator2;
use FactoryMethod\Practical\SocialNetworkPoster;
use FactoryMethod\Practical\FacebookPoster;
use FactoryMethod\Practical\LinkedinPoster;

$app=new Autoload();

/**
 * Factory Method Conceptual Calls
 */

function factoryMethodCode(Creator $creator): void
{
    echo $creator->someOperation();
}

$creator = new ConcreteCreator1();
factoryMethodCode($creator);

echo "<br>";

$creator = new ConcreteCreator2();
factoryMethodCode($creator);
/**
 * End Factory Method Conceptual Calls
 */


/**
 * Factory Method Practical Calls
 */
function practicalFactoryMethodCode(SocialNetworkPoster $socialNetworkPoster): void
{
    $socialNetworkPoster->post('Hello world');
    $socialNetworkPoster->post('Its working fine now');
}

$linkedinPoster = new LinkedinPoster('mseel3ttar@linkedin.com','123456789');
practicalFactoryMethodCode($linkedinPoster);

$facebookPoster = new FacebookPoster('mseel3ttar@faceebook.com','123456789');
practicalFactoryMethodCode($facebookPoster);
/**
 * End Factory Method Practical Calls
 */
