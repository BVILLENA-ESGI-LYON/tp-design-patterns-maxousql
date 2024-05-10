<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Decorator\Event;
use EsgiIw\TpDesignPattern\Decorator\EventWithLocation;
use EsgiIw\TpDesignPattern\Decorator\EventWithDate;
use EsgiIw\TpDesignPattern\Decorator\EventWithAttendees;

require_once 'vendor/autoload.php';

echo "<--------------------------> Tests Decorator <-------------------------->\n\n";

echo "############### Test de la classe de base Event ###############\n\n";
echo "> Création event :\n";
$event = new Event("test");
echo "Desc de l'event : " . $event->getDescription() . "\n\n";

echo "############### Test du décorateur EventWithLocation ###############\n";
echo "> Création event + loc :\n";
$eventWithLocation = new EventWithLocation($event, "Conference Room A");
echo "Desc de l'event + loc : " . $eventWithLocation->getDescription() . "\n\n";

echo "############### Test du décorateur EventWithDate ###############\n";
echo "> Création event + date :\n";
$eventWithDate = new EventWithDate($event, "2024-06-15");
echo "Desc de l'event + date : " . $eventWithDate->getDescription() . "\n\n";

echo "############### Test du décorateur EventWithAttendees ###############\n";
echo "> Création de l'event + participatns :\n";
$eventWithAttendees = new EventWithAttendees($event, ["John", "Alice", "Bob"]);
echo "Desc de l'event + participants : " . $eventWithAttendees->getDescription() . "\n\n";
