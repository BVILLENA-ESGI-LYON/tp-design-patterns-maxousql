<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class EventWithDate extends EventDecorator
{
    private string $date;

    public function __construct(EventInterface $event, string $date)
    {
        parent::__construct($event);
        $this->date = $date;
    }

    public function getDescription(): string
    {
        return $this->event->getDescription() . " - Date: {$this->date}";
    }
}
