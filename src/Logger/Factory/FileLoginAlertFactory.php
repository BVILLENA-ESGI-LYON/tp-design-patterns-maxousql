<?php

namespace EsgiIw\TpDesignPattern\Logger\Factory;

use EsgiIw\TpDesignPattern\Logger\FileLoginAlert;

class FileLoginAlertFactory extends LoginAlertFactory
{
    public function getLoginAlertInterface(): FileLoginAlert
    {
        return new FileLoginAlert();
    }
}
