<?php


/**
 * Deze functie doet geen bal, geef je naam op en jezelf een cijfer, functie geeft wat terug.
 * @param string $mijnNaam
 * @param int $mijnInzet
 * @return string
 */
function ikBenLuiVandaag(string $mijnNaam, int $mijnInzet = 0): string
{
    return "Sorry, ik was mega lui vandaag. Mijn naam is {$mijnNaam} en ik heb dus echt helemaal {$mijnInzet} gedaan";
}

/**
 * Deze functie doet geen bal, geef je naam op en jezelf een cijfer, functie geeft wat terug.
 * @param string $mijnNaam
 * @param int $mijnInzet
 * @return string
 */
function ikVerdienEenStikker(string $mijnNaam, int $mijnInzet = 0): string
{
    return "Mijn naam is {$mijnNaam} en ik verdien een sticker want ik heb namelijk {$mijnInzet} gedaan";
}

/**
 * Deze functie geeft een eerlijke beoordeling en maakt gebruik van 2 andere functies.
 * Opdracht: de laatste else is overbodig, leg uit waarom.
 * Opdracht: herschrijf de functie zodat die "bug" er uit is.
 *
 * @param string $mijnNaam
 * @param int $mijnInzet
 * @return string
 */
function eerlijkeBeoordeling(string $mijnNaam, int $mijnInzet = 0): string
{

    if ($mijnInzet > 5) {
        return ikVerdienEenStikker($mijnNaam, $mijnInzet);
    } elseif ($mijnInzet < 5) {
        return ikBenLuiVandaag($mijnNaam, $mijnInzet);
    } else {
        error_reporting("Unimplemented rating: {$mijnInzet}.");
    }

}
