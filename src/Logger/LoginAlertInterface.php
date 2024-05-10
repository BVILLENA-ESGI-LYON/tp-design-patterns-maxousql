<?php

namespace EsgiIw\TpDesignPattern\Logger;

interface LoginAlertInterface
{
    public function log(string $type, string $message): void;
}
