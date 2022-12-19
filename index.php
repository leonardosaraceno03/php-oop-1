<?php
include_once __DIR__ . "/classi/movie.php";




$film1 = new Movie("avatar2", "2022", 30, $prezzoScontato);
var_dump($film1);
$film2 = new Movie("titanic 4", "2050", 89, $prezzoScontato);
var_dump($film1);
$film3 = new Movie("avatar 3", "2024", 3, $prezzoScontato);
var_dump($film1);

?>