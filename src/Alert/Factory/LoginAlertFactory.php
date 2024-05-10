<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;


abstract class LoginAlertFactory
{
    abstract public function createLoginAlert(): LoginAlertInterface;

    public function triggerLoginAlert(string $username): void
    {
        $alert = $this->createLoginAlert();
        $alert->trigger($username);
    }
}
