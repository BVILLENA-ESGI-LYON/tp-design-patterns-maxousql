<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Event\Export;

class EventCsvExportAdapter implements EventExportInterface
{
    public function export(array $events): string
    {
        $csvData = '';
        foreach ($events as $event) {
            $csvData .= implode(',', $event) . "\n";
        }
        return $csvData;
    }
}
