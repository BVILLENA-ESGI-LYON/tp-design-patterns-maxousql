<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use EsgiIw\TpDesignPattern\Logger\BddLoginAlert;

class BddLoginAlertFactory extends LoginAlertFactory
{
    public function getLoginAlertInterface(): BddLoginAlert
    {
        return new BddLoginAlert();
    }
}
