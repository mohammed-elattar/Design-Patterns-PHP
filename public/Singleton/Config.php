<?php

declare(strict_types=1);

namespace App\Singleton;

class Config extends Singleton
{
    public $config;
    
    public function setConfig(string $json)
    {
        $this->config = json_decode($json);
    }
}
