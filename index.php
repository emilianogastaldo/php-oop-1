<?php

require_once __DIR__ . '/data/movies.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    
</head>
<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main>
        <ul>
            <?php foreach($movies as $movie) : ?>
                <li>
                    <h2><?= $movie->title ?></h2>
                    <p>Overview: <?= $movie->overview ?></p>
                    <p>Voto: <?= $movie->vote ?></p>
                    <p>Release Date: <?= $movie->release_date ?></p>
                    <p>Director: <strong><?= $movie->director->getFullName() ?></strong></p>
                    <h4>Cast:</h4>
                    <ul>
                        <?php foreach($movie->cast as $actor) : ?>
                            <li>
                                <p><?= $actor->getFullName() ?>, role: <?= $actor->role ?></p>

                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
    <footer>
        <a href="http://localhost">Torna indietro</a>
    </footer>
</body>
</html>