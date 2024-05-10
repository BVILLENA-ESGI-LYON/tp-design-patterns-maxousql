<?php

namespace EsgiIw\TpDesignPattern\Logger;

class BddLoginAlert implements LoginAlertInterface
{
    public function __construct()
    {
    }

    public function log(string $type, string $message): void
    {
        echo "On ajoute cette erreur de log dans la base de données : {$message}";
    }
}
