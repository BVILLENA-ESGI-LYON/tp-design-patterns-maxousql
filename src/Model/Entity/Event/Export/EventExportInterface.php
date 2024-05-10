<?php

namespace EsgiIw\TpDesignPattern\Model\Entity\Event\Export;

interface EventExportInterface
{
    public function export(array $events): string;
}
