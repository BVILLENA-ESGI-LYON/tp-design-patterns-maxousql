<?php

namespace EsgiIw\TpDesignPattern\Decorator;

class EventWithAttendees extends EventDecorator
{
    private array $attendees;

    public function __construct(EventInterface $event, array $attendees)
    {
        parent::__construct($event);
        $this->attendees = $attendees;
    }

    public function getDescription(): string
    {
        return $this->event->getDescription() . " - Attendees: " . implode(', ', $this->attendees);
    }
}
