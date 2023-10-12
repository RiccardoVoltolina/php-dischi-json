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

<body>
    <div id='app'>
        <header class="container-fluid bg-secondary">

        </header>

        <div class="container">
            <div class="row">
                <div class="col-4 mt-5">
                    <div class="card">
                        <img src="https://picsum.photos/20/20" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{todos}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- creo il collegamento con la cdn di vue -->

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- creo il collegamento con la cdn di axios -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./main.js"></script>
</body>

</html>