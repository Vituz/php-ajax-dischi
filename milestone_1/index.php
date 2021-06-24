<?php

require __DIR__ . '/database/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT ROBOTO -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Booltify</title>
</head>

<body>
    <div id="app">
        <header>
            <img src="./assets/img/logo.png" alt="Logo Spotify">

    </div>
    </header>

    <main>
        <div class="container">
            <?php foreach ($database as $album) : ?>

                <div class="card">
                    <img src="<?= $album['poster'] ?>" alt="Album image">
                    <h2> <?= $album['title'] ?> </h2>
                    <h4> <?= $album['author'] ?> </h4>
                    <h4> <?= $album['year'] ?> </h4>
                </div>

            <?php endforeach ?>
        </div>
    </main>
    </div>


</body>

</html>