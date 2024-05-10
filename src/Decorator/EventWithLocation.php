<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class EventWithLocation extends EventDecorator
{
    private string $location;

    public function __construct(EventInterface $event, string $location)
    {
        parent::__construct($event);
        $this->location = $location;
    }

    public function getDescription(): string
    {
        return $this->event->getDescription() . " - Location: {$this->location}";
    }
}
