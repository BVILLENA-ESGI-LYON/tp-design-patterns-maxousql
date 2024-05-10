<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\EventRegistration\Templates;

use EsgiIw\TpDesignPattern\EventRegistration\EventRegistration;

class BDEEventRegistration extends EventRegistration
{
    public function validateRegistration(): void
    {
        echo "Validating BDE event registration...\n";
        echo "Checking BDE membership card...\n";
    }
}
