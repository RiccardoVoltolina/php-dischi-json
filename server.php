<?php


// trasforma l' array di oggetti di json in un array associativo (quello con => di php), in modo che si possono fare le chiamate get in index

$todos = json_decode(file_get_contents('songs.json'), true);

# creo il collegamento tra il file json e index

header('Content-Type: application/json');

echo json_encode($todos);
