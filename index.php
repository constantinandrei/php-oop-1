<?php
require_once ('object.php');

$movie1 = new Movie(1, 'Pulp Fiction', 'Quentin Tarantino');
$movie1->addCast('actor', 'Bruce Willis');
$movie1->addCast('actor', 'UmaThurman');



var_dump($movie1);

?>