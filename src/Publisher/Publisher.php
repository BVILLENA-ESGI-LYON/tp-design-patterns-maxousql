<?php

namespace EsgiIw\TpDesignPattern\Publisher;

use EsgiIw\TpDesignPattern\Observer\Observer;

class Publisher
{
    private array $eventObservers = [];

    public function addEventObserver(string $eventName, Observer $observer): static
    {
        $this->eventObservers[$eventName] ??= [];
        $this->eventObservers[$eventName][] = $observer;

        return $this;
    }

    public function notify(string $eventName, mixed $data): void
    {
        foreach ($this->eventObservers[$eventName] ?? [] as $eventObserver) {
            $eventObserver->handle($data);
        }
    }
}
