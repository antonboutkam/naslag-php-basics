<?php
/**
Een variabele heeft in php altijd een dollarteken. Variabele namen worden geschreven in upperCamelCase by conventie.
Deze conventie is vastgelegd in de FIG standard die tegenwoordig door vrijwel elk bedrijf wordt gebruikt.
* @see https://www.php-fig.org/psr/psr-1/
*/

$mijnNaam = '';
$andereNaam = '';

/*
 * Je ziet hieronder eens string met tekst. Draai het script en kijk naar de output van de console.
 */

echo "Ik heet {$mijnNaam}" . PHP_EOL;
echo "Dag {$mijnNaam}, jij heet {$andereNaam}" . PHP_EOL;

/**
 * Een constante is in PHP ongeveer hetzelfde als een variabele, maar deze kan niet wijzigen. In PHP is een constante
 * als een variabele, maar deze kan niet van waarde veranderen. Stel je hebt een webshop gemaakt en je moet BTW
 * berekenen. Dan wil je zeker weten dat het BTW-percentage (VAT-percentage in het engels) vast is en niet per
 * ongeluk ergens in de code veranderd kan worden. Net als in veel andere talen kun een variabele "immutable" maken
 * door hem als constante te definiéren. Constanten zijn globaal en dus overal in je code bereikbaar. PHP heeft zelf
 * ook veel constanten die je kunt gebruiken in je code, we noemen dit magic constants omdat ze vanzelf beschikbaar
 * zijn.
 */
const DOCENT = 'Anton';
const VAT_HIGH = 21;


/**
 * Magic constants in php:
 * https://www.php.net/manual/en/language.constants.magic.php
 *
 * PHP_EOL ................. (vul hier in je eigen woorden in wat de inhoud van deze constante is)
 * __LINE__ ................. (vul hier in je eigen woorden in wat de inhoud van deze constante is)
 * __FILE__ ................. (vul hier in je eigen woorden in wat deze constante doet)
 * __DIR__ ................. (vul hier in je eigen woorden in wat deze constante doet)
 *
 * Tip: gebruik echo
 */
echo __FILE__;


/**
 * Data typen
 * String
 * Integer
 * Float (floating point numbers - also called double)
 * Boolean
 * Array
 * Object
 * NULL
 * Resource
 */