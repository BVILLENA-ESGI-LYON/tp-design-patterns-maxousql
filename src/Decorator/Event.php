<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class Event implements EventInterface
{
    protected string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
