<?php
/**
 * In het eerste bestand had je jouw eigen naam op gegeven in een variabele. Omdat we hieronder een require doen is
 * zijn de variabelen, constanten, functies etc die we in dat bestand hadden gedefinieerd nu hier ook beschikbaar.
 * Later zul je leren hoe je dat automatisch kunt doen.
 */

// Dit kun je bijvoorbeeld doen om een configuratie.php bestand te includen.
require '1-variabelen-en-constanten.php';


// Opdracht: Haal wet wat niet van toepassing is:
// Dit is een (associatieve / sequentiele) array met namen.
$mijnGroep = [
    DOCENT,
    $mijnNaam,
    'vul-naam-teamgenoot-1-in',
    'vul-naam-teamgenoot-2-in',
    'vul-naam-teamgenoot-3-in',
];

// Opdracht: regel 24 zorgt ervoor dat....
// Verander de comments door een uitleg wat deze regel doet.
echo PHP_EOL;


// Opdracht: Wat zit er in $index voor mijn naam (Anton)
foreach($mijnGroep as $index => $naam)
{
    echo $index . ' - ' . $naam . PHP_EOL;
}



