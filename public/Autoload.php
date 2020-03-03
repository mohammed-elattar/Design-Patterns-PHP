<?php

declare(strict_types=1);

namespace System;

class Autoload
{
    public function __construct()
    {
        $this->register();
    }

    private function register()
    {
        spl_autoload_register([$this,'load']);
    }

    private function load($class)
    {
        require str_replace('\\',\DIRECTORY_SEPARATOR,$class).'.php';
    }
}
