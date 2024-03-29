<?php
header('Content-Type: text/html; charset=utf-8');

/**
 * 10. Ciclo foreach e incremento di variabili numeriche
 */

define("TITLE", "Questo è il corso Codemaster di TAG");
$message = "Benvenuti al corso!";
$students = ['Francesco', 'Matteo', 'Marco', 'Patrizia'];

// Versione estesa
$numberOfStudents = 0;
foreach ($students as $student) {
    $numberOfStudents = $numberOfStudents + 1;
}

// Stessa cosa utilizzando la notazione abbreviata
$numberOfStudents = 0;
foreach ($students as $student) {
    $numberOfStudents += 1;
}

// Stessa cosa utilizzando l'operatore di incremento singolo
$numberOfStudents = 0;
foreach ($students as $student) {
    $numberOfStudents ++;
}

?>

<html>
    <head>
        <title><?= TITLE ?></title>
    </head>
    <body>
        <h1><?= $message ?></h1>
        <p>Il numero degli studenti è <?= $numberOfStudents ?></p>
        <h2>Elenco degli studenti</h2>
        <ul>
            <?php foreach ($students as $student): ?>
                <li><?= $student ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>