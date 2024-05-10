<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Event\Export;

class EventJsonExportAdapter implements EventExportInterface
{
    public function export(array $events): string
    {
        return json_encode($events);
    }
}
