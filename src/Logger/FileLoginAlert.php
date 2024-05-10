<?php

namespace EsgiIw\TpDesignPattern\Logger;

class FileLoginAlert implements LoginAlertInterface
{
    public function __construct()
    {
    }

    public function log(string $type, string $message): void
    {
        echo "On ajoute cette erreur dans le fichier de log : {$message}";
    }
}
