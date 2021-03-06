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

    <title>Booltify PHP-Axios</title>
</head>

<body>
    <div id="app">
        <header>
            <img src="./assets/img/logo.png" alt="Logo Spotify">

        </header>

        <main>
            <div class="container">
                <div class="card" v-for="item in albums">
                    <img v-bind:src="item.poster" :alt="'Album' + item.title ">
                    <h2> {{ item.title }} </h2>
                    <h4> {{ item.author }} </h4>
                    <h4> {{ item.year }} </h4>
                </div>
            </div>
        </main>
    </div>


    <!-- CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CDN VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- MAIN JS -->
    <script src="./assets/js/app.js"></script>
</body>

</html>