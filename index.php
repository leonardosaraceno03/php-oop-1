<?php
include_once __DIR__ . "/classi/movie.php";





$film1 = new Movie("avatar2", "2022", 10);
$film1->prezzoBiglietto = 90;
$film1->setprezzoScontato(11);

 var_dump($film1);
// $film2 = new Movie("titanic 4", "2050", 89, $prezzoScontato);
// var_dump($film2);
// $film3 = new Movie("avatar 3", "2024", 3, $prezzoScontato);
// var_dump($film3);


//$film1->setprezzoScontato($prezzoBiglietto, $prezzoScontato);
?>