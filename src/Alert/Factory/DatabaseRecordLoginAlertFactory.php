<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\Factory\LoginAlertFactory;
use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;
use EsgiIw\TpDesignPattern\Alert\Login\DatabaseRecordLoginAlert;

class DatabaseRecordLoginAlertFactory extends LoginAlertFactory
{
    public function createLoginAlert(): LoginAlertInterface
    {
        return new DatabaseRecordLoginAlert();
    }
}
