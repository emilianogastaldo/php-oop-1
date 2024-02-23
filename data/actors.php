<?php

require_once __DIR__ . '/../models/Actor.php';

// Creo degli Actor
$luisa = new Actor ('Luisa', 'Gialli', '31/01/1995', 'Main');
$gennaro = new Actor('Gennaro', 'Costa', '23/07/1990', 'Main');
$annalisa = new Actor ('Annalisa', 'Rossi', '15/03/1987', 'Secondary');
$guglielmo = new Actor ('Guglielmo', 'Perusi', '15/06/1967', 'Secondary');
$elisa = new Actor ('Elisa', 'Monti', '15/04/1977', 'Secondary');
$sofia = new Actor ('Sofia', 'Leoni', '15/08/1997', 'Secondary');

// Creo un array per il cast
$cast1 = [$luisa, $annalisa, $guglielmo];
$cast2 = [$gennaro, $elisa, $sofia];