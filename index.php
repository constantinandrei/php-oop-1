<?php
require_once ('object.php');

$movie1 = new Movie(1, 'Pulp Fiction', 'Quentin Tarantino');
$movie1->addCast('actor', 'Bruce Willis');
$movie1->addCast('actor', 'Uma Thurman');

$movie2 = new Movie(2, 'Titanic', 'James Camerun');
$movie2->addCast('actor', 'Leonardo di Caprio');

$movie3 = new Movie(3, 'Star Wars', 'George Lucas');
$movie3-> addCast('dictator', 'Dart Fener');

$movieArray = [];
$movieArray[] = $movie1;
$movieArray[] = $movie2;
$movieArray[] = $movie3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>My Movies</title>
</head>
<body>
    <nav class="bg-primary text-white text-center py-3">
        <h4>My Movies</h4>
    </nav>
    <main>
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <?php foreach($movieArray as $movie){
                    $name = $movie->getName();
                    $director = $movie->getDirector();
                    $cast = $movie->getCast();
                    ?>
                    <div class="col col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <?php echo $name ?>
                                </div>
                                <div class="card-subtitle mb-2 text-muted">
                                <?php echo $director ?>
                                </div>
                            
                                <div class="card-text">Actors</div>
                                <ul class="list-group list-group-flush">
                                    <?php foreach($cast as $member){?>
                                        <li class="list-group-item">
                                            <?php echo $member["name"] ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>