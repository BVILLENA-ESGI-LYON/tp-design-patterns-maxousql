<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\Model\Mailer;

final class MailerCon
{
    private static ?MailerCon $instance = null;

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }
}
