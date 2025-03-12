<?php
/***
 * Hieronder staat een voorbeeld van een multi dimensionele array. Voer het script uit en kijk wat de uitkomst is.
 */

$array = [
    [
        'naam' => 'Suzan',
        'cijfer' => 9
    ],
    [
        'naam' => 'Hamza',
        'cijfer' => 5
    ],
    [
        'naam' => 'Oejasaka',
        'cijfer' => 6.6
    ],
    [
        'naam' => 'Max',
        'cijfer' => 3
    ],
    [
        'naam' => 'Anton',
        'cijfer' => 2
    ],
];


// Toon de naam van element 3 uit de array.
echo $array[3]['naam'];

// Vraag: deze array heeft 2 niveau's,
// level 1: een lijst met studenten.
// level 2: gegevens over elke student.

// Opdracht: haal weg wat niet van toepassing is.
// level 1 is een associatieve / sequentiele array
// level 2 is een associatieve / sequentiele array