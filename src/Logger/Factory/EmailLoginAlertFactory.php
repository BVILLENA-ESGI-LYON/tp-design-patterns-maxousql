<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use EsgiIw\TpDesignPattern\Logger\EmailLoginAlert;

class EmailLoginAlertFactory extends LoginAlertFactory
{
    public function getLoginAlertInterface(): EmailLoginAlert
    {
        return new EmailLoginAlert();
    }
}
