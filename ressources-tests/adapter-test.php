<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event\Export\EventCsvExportAdapter;
use EsgiIw\TpDesignPattern\Model\Entity\Event\Export\EventJsonExportAdapter;

require_once 'vendor/autoload.php';

$events = [
    ['event_id' => 1, 'event_name' => 'Event 1', 'event_date' => '2024-01-25'],
    ['event_id' => 2, 'event_name' => 'Event 2', 'event_date' => '2024-02-12'],
];

echo "<--------------------------> Tests Adapter <-------------------------->\n\n";

echo "############### Test de l'exportation des événements en format CSV ###############\n\n";
echo "> Création adaptateur CSV : \n";
$csvExporter = new EventCsvExportAdapter();
$csvData = $csvExporter->export($events);
echo "DATA CSV exportées :\n $csvData \n\n";

echo "############### Test de l'exportation des événements en format JSON ###############\n\n";
echo "> Création adaptateur JSON :\n";
$jsonExporter = new EventJsonExportAdapter();
$jsonData = $jsonExporter->export($events);
echo "DATA JSON exportées :\n $jsonData";
