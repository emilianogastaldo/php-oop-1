<?php

require_once __DIR__ . '/data/movies.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- Importo bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <!-- Importo fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
</head>
<body>
    <div class="container my-5">

    <header class="mb-5">
        <h1>Movies</h1>
    </header>
    <main>
        <ul>
            <?php foreach($movies as $movie) : ?>
                <li class="mb-5">
                    <h2><?= $movie->title ?></h2>
                    <p>Overview: <?= $movie->overview ?></p>
                    <p>Voto: 
                        <?php for($i = 1; $i <= 10; $i++ ):?> 
                        <i class="fa-star <?= $i <= $movie->vote ? 'fas' : 'far' ?>"></i>
                        <?php endfor ?>
                    </p>
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
        <a class="btn btn-outline-dark" href="http://localhost">Torna indietro</a>
    </footer>
    </div>

</body>
</html>