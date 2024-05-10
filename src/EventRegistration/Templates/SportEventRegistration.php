<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\EventRegistration\Templates;

use EsgiIw\TpDesignPattern\EventRegistration\EventRegistration;

class SportEventRegistration extends EventRegistration
{
    public function validateRegistration(): void
    {
        echo "Validating sport event registration...\n";
        echo "Medical certificate check...\n";
    }
}
