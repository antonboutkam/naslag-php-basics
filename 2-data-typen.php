<?php
/**
 * PHP kent verschillende data typen. Hieronder staat een lijst met data typen. Schrijf hieronder voor jezelf op waar
 * een datatype voor wordt gebruikt.
 *
 * String -
 * Integer -
 * Float -
 * Boolean -
 * Array -
 * Object -
 * NULL -
 * Resource -
 */

$array = [
    'Anton',
    10,
    '12.6',
    ['naam' => 'Anton', 'achternaam' => 'Boutkam'],
];

foreach($array as $item)
{
    var_dump($item);
}
