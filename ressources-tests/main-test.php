<?php

$tests = [
    '1' => '1.1. Test Singleton',
    '2' => '1.2. Test Factory Method',
    '3' => '1.3. Test Factory Abstract',
    '4' => '1.4. Test Builder',
    '5' => '2.1. Adapter',
    '6' => '2.2. Decorator',
    '7' => '2.3. Facade',
    '8' => '3.1. Observer',
    '9' => '3.2. Strategy',
    '10' => '3.3. Template Method',
];

echo "Sélectionnez le test à exécuter ou '0' pour quitter :\n";
foreach ($tests as $key => $test) {
    echo "[$key] $test\n";
}

$choice = readline("Votre choix : ");

if (!isset($tests[$choice])) {
    exit(1);
}

if ($choice !== '0') {
    executeTest($choice);
}

function executeTest($testNumber)
{
    $tests = [
        '1' => '1.1. Test Singleton',
        '2' => '1.2. Test Factory Method',
        '3' => '1.3. Test Factory Abstract',
        '4' => '1.4. Test Builder',
        '5' => '2.1. Adapter',
        '6' => '2.2. Decorator',
        '7' => '2.3. Facade',
        '8' => '3.1. Observer',
        '9' => '3.2. Strategy',
        '10' => '3.3. Template Method',
    ];

    $testFileName = match ($testNumber) {
        '1' => 'singleton-test.php',
        '2' => 'factoryMethod-test.php',
        '3' => 'factoryAbstract-test.php',
        '4' => 'builder-test.php',
        '5' => 'adapter-test.php',
        '6' => 'decorator-test.php',
        '7' => 'facade-test.php',
        '8' => 'observer-test.php',
        '9' => 'strategy-test.php',
        '10' => 'template-method-test.php',
        default => "test$testNumber.php",
    };
    $testFilePath = "./ressources-tests/$testFileName";

    if (!file_exists($testFilePath)) {
        echo "Le fichier de test '$testFilePath' n'existe pas.\n";
        exit(1);
    }

    echo "\nAppuyez sur Entrée pour exécuter le test '$testFileName'.";
    readline();
    echo "Exécution du test '$testFileName' :\n";
    $output = shell_exec("php -f $testFilePath");
    echo $output;

    $choice = readline("\nVoulez-vous exécuter un autre test ? (Y/N) : ");
    if (strtolower($choice) === 'y') {
        foreach ($tests as $key => $test) {
            echo "[$key] $test\n";
        }

        $choice = readline("\nVotre choix : ");

        if ($choice !== '0') {
            executeTest($choice);
        }
    }
}
