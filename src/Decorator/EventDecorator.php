<?php

namespace EsgiIw\TpDesignPattern\Decorator;

abstract class EventDecorator implements EventInterface
{
    protected EventInterface $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    public function getDescription(): string
    {
        return $this->event->getDescription();
    }
}
