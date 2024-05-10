<?php

namespace EsgiIw\TpDesignPattern\Observer;

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Publisher\Publisher;

class EventModification
{
    public function __construct(
        private Publisher $publisher,
    ) {
    }

    public function modifyEvent(Event $event): void
    {
        $this->publisher->notify(
            eventName: 'event:modified',
            data: $event,
        );
    }
}
