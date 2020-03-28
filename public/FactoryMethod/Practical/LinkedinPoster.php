<?php

declare(strict_types=1);

namespace App\FactoryMethod\Practical;

class LinkedinPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetworkConnector(): SocialNetworkConnector
    {
        return new FacebookConnector($this->email, $this->password);
    }
}
