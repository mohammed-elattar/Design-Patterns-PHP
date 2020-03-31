<?php

declare(strict_types=1);

namespace App\Singleton;

class Database extends Singleton
{
    public $handler;

    protected function __construct()
    {
        $config = Config::getInstance();
        $config1 = Config::getInstance();
        var_dump($config,$config1);
        $this->handler = 'asdfghjkl';

    }
}
