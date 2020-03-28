<?php

declare(strict_types=1);

namespace App\FactoryMethod\Practical;

class FacebookConnector implements SocialNetworkConnector
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

    public function login(): void
    {
        echo sprintf('User with email %s has logged in to %s with password %s'
            , $this->email,
            __CLASS__,
            $this->password);
        echo "<br/>";
    }

    public function post(string $content): void
    {
        echo sprintf('post content is %s', $content);
        echo "<br/>";
    }

    public function logout(): void
    {
        echo sprintf('User with email %s has logged out from %s .'
            , $this->email,
            __CLASS__);
        echo "<br/>";
    }
}
