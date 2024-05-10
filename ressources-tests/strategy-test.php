<?php

declare(strict_types=1);

use EsgiIw\TpDesignPattern\Logger\Strategy\FileLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\SendAdminEmailLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\FileDebugLogStrategy;
use EsgiIw\TpDesignPattern\Logger\Strategy\DatabaseLogStrategy;
use EsgiIw\TpDesignPattern\Logger\LoggerWithStrategies;

require_once 'vendor/autoload.php';

echo "<--------------------------> Tests Strategy <-------------------------->\n\n";

$logger = new LoggerWithStrategies();

$logger
    ->addStrategy(new FileLogStrategy())
    ->addStrategy(new FileDebugLogStrategy())
    ->addStrategy(new DatabaseLogStrategy())
    ->addStrategy(new SendAdminEmailLogStrategy());

function runTest(string $description, callable $testFunction)
{
    echo "############### $description ###############\n";
    $testFunction();
    echo "\n\n";
}

$tests = [
    "> Message de debug :" => function () use ($logger) {
        $logger->debug('Je suis un message de debug');
    },
    "Message de warning :" => function () use ($logger) {
        $logger->warning('Je suis un message WARNING');
    },
    "Message d'erreur :" => function () use ($logger) {
        $logger->error('Je suis un message d\'erreur');
    },
    "Message d'erreur critique :" => function () use ($logger) {
        $logger->critical('Je suis un message d\'erreur CRITIQUE !!');
    },
];

foreach ($tests as $description => $testFunction) {
    runTest($description, $testFunction);
}
