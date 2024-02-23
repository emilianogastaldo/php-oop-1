<?php

require_once __DIR__ . '/../models/Movie.php';
require __DIR__ . '/directors.php';
require __DIR__ . '/actors.php';

// Dati Movie
$title1 = "The Witcher: Nightmare of the Wolf";
$overview1 = "Escaping from poverty to become a witcher, Vesemir slays monsters for coin and glory, but when a new menace rises, he must face the demons of his past.";
$vote1 = rand(1,10);
$release_date1="2020-08-26";

$title2 = "Kommissar Pippo";
$overview2 = 'Kommissar Pippo is searching the biggest dealer of Locarno City.';
$vote2 = rand(1,10);
$release_date2 = "2004-08-04";

// Creo i movies
$movie1 = new Movie($title1, $overview1, $vote1, $release_date1, $giorgio, $cast1);
$movie2 = new Movie($title2, $overview2, $vote2, $release_date2, $emanuele, $cast2);

$movies = [$movie1, $movie2];