<?php
    $nombre = (string) 'Miguel Angel Castro Escamilla';
    $_edad = (int) 23;
    $Altura = (double) 1.83;
    $soy_Su_Profesor = (boolean) true;
    $HOBBIES = (array) ['Programar','Cocinar',407];
    
    $objeto = new stdClass;
    $objeto->cosas = "Tv";

    print_r($objeto->cosas);
    // echo "<br>"; 
    // var_dump($HOBBIES);

?>