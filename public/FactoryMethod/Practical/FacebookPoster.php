<?php

declare(strict_types=1);

namespace FactoryMethod\Practical;

class FacebookPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private string $email;
    
    /**
     * @var string
     */
    private string $password;

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
