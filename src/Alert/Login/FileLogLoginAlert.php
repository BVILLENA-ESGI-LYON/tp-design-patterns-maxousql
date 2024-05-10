<?php

namespace EsgiIw\TpDesignPattern\Alert\Login;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

class FileLogLoginAlert implements LoginAlertInterface
{

    public function trigger(string $username): void
    {
        file_put_contents('login.log', "User '{$username}' logged in." . PHP_EOL, FILE_APPEND);
    }
}
