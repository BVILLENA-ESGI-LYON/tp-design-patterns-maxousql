<?php

namespace EsgiIw\TpDesignPattern\Alert\Factory;

use EsgiIw\TpDesignPattern\Alert\LoginAlertInterface;
use EsgiIw\TpDesignPattern\Alert\Login\FileLogLoginAlert;

class FileLogLoginAlertFactory extends LoginAlertFactory
{
    public function createLoginAlert(): LoginAlertInterface
    {
        return new FileLogLoginAlert();
    }
}
