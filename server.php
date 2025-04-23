<?php
// leggere il file 

$json_text = file_get_contents('./cds.json');
// covertiamo da json a php 
$cds = json_decode($json_text, true);

// modifichiamo la struttura dati 
// inserire nuovo album nel file 
$new_cd = [
    'title' => $_POST['title'],
    'artist' => $_POST['artist'],
    'cover' => $_POST['cover'],
    'year' => $_POST['year'],
    'genre' => $_POST['genre']
];

$cds[] = $new_cd;
// convertiamo i dati php in stringa json 
$json_text = json_encode($cds);
// sovrascriviamo il contenuto 
file_put_contents('./cds.json' , $json_text );

// reindirizzare alla index 
header('Location: ./index.php' );
?>