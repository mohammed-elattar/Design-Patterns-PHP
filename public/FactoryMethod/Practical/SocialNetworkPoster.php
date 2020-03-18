<?php

declare(strict_types=1);

namespace App\FactoryMethod\Practical;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetworkConnector(): SocialNetworkConnector;

    public function post($content): void
    {
       $socialNetwork = $this->getSocialNetworkConnector();
       $socialNetwork->login();
       $socialNetwork->post($content);
       $socialNetwork->logout();
    }
}
