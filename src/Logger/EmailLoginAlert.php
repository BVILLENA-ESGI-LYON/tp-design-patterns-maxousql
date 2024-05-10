<?php

namespace EsgiIw\TpDesignPattern\Logger;

class EmailLoginAlert implements LoginAlertInterface
{
    public function __construct()
    {
    }

    public function log(string $type, string $message): void
    {
        echo "On envoie le mail contenant ce message d'erreur de log aux admins : {$message}";
    }
}
