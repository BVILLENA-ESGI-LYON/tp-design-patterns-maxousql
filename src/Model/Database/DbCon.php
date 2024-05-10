<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Database;

final class DbCon
{
    private static ?DbCon $instance = null;

    public static function getInstance(): static
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }
}
