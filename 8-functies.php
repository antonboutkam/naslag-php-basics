<?php
/***
 * Een functie is een zwarte doos, zoals hij bedoeld althans. Je stopt er wat dingen in en er komt een resultaat uit.
 * In PHP, javaScript, Java, C#, C, Python werken functies nagenoeg hetzelfde. Snap je de 1 dan snap je de ander.
 * Vandaar dat het belangrijk is dat je begrijpt hoe functies werken. Als je dit begrijpt dan kun je bijna alles maken.
 *
 * Het belangrijkste is dat PHP ook extreem veel ingebouwde functies heeft, maar daarover meer in de volgende stap.
 */

// In dit bestand staan de functies ikBenLuiVandaag, ikVerdienEenStikker, eerlijkeBeoordeling
require 'functies.php';


// Vraag, welke manier is goed? En waarom?


// Manier 1
$mijnPrestaties =  ikVerdienEenStikker('Vul je naam in', 7);
echo 'Vandaar was mijn inzet ' . $mijnPrestaties . PHP_EOL;

// Manier 2
echo 'Vandaar was mijn inzet ' . ikVerdienEenStikker('Vul je naam in', 7) . PHP_EOL;

