<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Model\Repository\RepositoryFacade;
use EsgiIw\TpDesignPattern\Model\Repository\EntityRepository;
use EsgiIw\TpDesignPattern\Model\Entity\Event;

require_once 'vendor/autoload.php';

$repository = new EntityRepository();

$facade = new RepositoryFacade($repository);

$event = new Event();
$event->setId(1)
    ->setLabel('Test Event')
    ->setDescription('This is a test event')
    ->setDate(new DateTime('2024-05-20'));

$facade->saveEvent($event);

$retrievedEvent = $facade->findEventById(1);

if ($retrievedEvent) {
    echo "Event details:\n";
    echo "ID: {$retrievedEvent->getId()}\n";
    echo "Label: {$retrievedEvent->getLabel()}\n";
    echo "Description: {$retrievedEvent->getDescription()}\n";
    echo "Date: {$retrievedEvent->getDate()->format('Y-m-d')}\n";
} else {
    echo "Event not found.\n";
}

if ($retrievedEvent) {
    $facade->deleteEvent($retrievedEvent);
} else {
    echo "Event not found.\n";
}

$deletedEvent = $facade->findEventById(1);
if ($deletedEvent) {
    echo "Event ID 1 still exists.\n";
} else {
    echo "Event ID 1 has been successfully deleted.\n";
}
