<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;
use EsgiIw\TpDesignPattern\Alert\Login\EmailAdminLoginAlert;

class EmailAdminLoginAlertFactory extends LoginAlertFactory
{
    public function createLoginAlert(): LoginAlertInterface
    {
        return new EmailAdminLoginAlert();
    }
}
