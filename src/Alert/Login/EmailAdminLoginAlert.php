<?php

namespace EsgiIw\TpDesignPattern\Alert\Login;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

class EmailAdminLoginAlert implements LoginAlertInterface
{
    public function trigger(string $username): void
    {
    }
}
