<?php

/* trasformo il mio array nel json in una stringa */ 

$todos = file_get_contents('songs.json');

//da delle impostazioni alla chiamata

header('Content-Type: application/json');

/* stampo todos in una nuova pagina */

echo $todos;
