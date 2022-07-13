<?php
require_once ('object.php');

$movie1 = new Movie(1, 'Pulp Fiction', 'Quentin Tarantino');
$movie1->addCast('actor', 'Bruce Willis');
$movie1->addCast('actor', 'Uma Thurman');

$movie2 = new Movie(2, 'Titanic', 'James Camerun');
$movie2->addCast('actor', 'Leonardo di Caprio');

$movie3 = new Movie(3, 'Star Wars', 'George Lucas');
$movie3-> addCast('dictator', 'Dart Fener');

var_dump($movie1);
var_dump($movie2);
var_dump($movie3);

?>