<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Entity\Event;
use EsgiIw\TpDesignPattern\Observer\EventModification;
use EsgiIw\TpDesignPattern\Observer\Observer;
use EsgiIw\TpDesignPattern\Publisher\Publisher;

require_once 'vendor/autoload.php';

echo "<--------------------------> Tests Observer <-------------------------->\n\n";

echo "############### Test de l'ajout d'observers lors de la modification d'un évènement ###############\n\n";

$observer1 = new Observer("Evenement 1 modifier avec succès !\n\n");
$observer2 = new Observer("Evenement 2 modifier avec succès !\n\n");

$eventPublisher = new Publisher();
$eventPublisher
    ->addEventObserver('event:modified', $observer1)
    ->addEventObserver('event:modified', $observer2);

$eventModification = new EventModification($eventPublisher);

$fictiveEvent = new Event();

$eventModification->modifyEvent($fictiveEvent);
