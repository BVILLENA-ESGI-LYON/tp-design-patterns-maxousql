<?php

namespace EsgiIw\TpDesignPattern\Alert\Login;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;

class DatabaseRecordLoginAlert implements LoginAlertInterface
{
    public function trigger(string $username): void
    {
    }
}
