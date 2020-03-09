<?php

declare(strict_types=1);

namespace FactoryMethod\Practical;

use FactoryMethod\Practical\SocialNetworkConnector;

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
