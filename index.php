<?php
/* Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato. */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id='app'>
        <header class="container-fluid bg-black">
            <div class="p-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="">
            </div>

        </header>

        <div class="container">
            <div class="row">
                <div class="col-4 mt-5" v-for='(todo, index) in todos'>
                    <div class="card bg-black text-white d-flex flex-column align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="selectedCard(todo)">
                        <img :src="todo.poster" class="card-img-top w-50 p-3" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{todo.title}}</h5>
                            <div class="card-text py-3">{{todo.author}}</div>
                            <h5 class="card-text">{{todo.genre}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modale -->
            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="exampleModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body text-black">
                            <img :src="modalAlbum.poster" class="card-img-top w-50 p-3" alt="" type="button">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{modalAlbum.title}}</h1>
                            <div class="card-text py-3">{{modalAlbum.author}}</div>
                            <h5 class="card-text">{{modalAlbum.genre}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fine modale -->
        </div>

    </div>






    <!-- creo il collegamento con la cdn di vue -->

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- creo il collegamento con la cdn di axios -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./main.js"></script>
</body>

</html>