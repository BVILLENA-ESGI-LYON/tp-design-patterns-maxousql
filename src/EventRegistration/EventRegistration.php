<?php

declare(strict_types=1);

namespace EsgiIw\TpDesignPattern\EventRegistration;

abstract class EventRegistration
{
    public function registerToEvent(): void
    {
        $this->validateMembership();
        $this->validateRegistration();
    }

    protected function validateMembership(): void
    {
        echo "Checking membership...\n";
    }

    abstract protected function validateRegistration(): void;
}
