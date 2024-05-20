<?php
/*
Se acercan las próximas elecciones estudiantiles en la universidad y te piden realizar un programa para verificar si un estudiante puede o no votar. Ten en cuenta que:

Debes usar una función con parámetros.

El estudiante debe tener mínimo 18 años para votar.
*/
function votar($persona,$edad){
    if($edad <=18){
        return $persona . " no puede votar" . "<br>";
    }else{
        return $persona . " sí puede votar" . "<br>"; 
    }   
}
echo votar("Ashley",14);
echo votar("Luis Camilo",20);
echo votar("Fernando",16);
echo votar("Jorge",22);

/*
Ashley no puede votar
Luis Camilo sí puede votar
Fernando no puede votar
Jorge sí puede votar
*/
?>