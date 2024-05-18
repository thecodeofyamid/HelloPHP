<?php 
//condicionales simples (if, else)
/*
Realizar un programa que envie un mensaje solo si este contiene menos de 100 letras, caso contrario que arroje un mensaje de error*/

$mensaje = "Hola queridos amigos, este mensaje es mi ejercicio de condicionales, espero que sea de agrado para Ustedes";

if(strlen($mensaje) <100){
    echo $mensaje;
}else{
    echo "No se ha podido enviar el mensaje porque contiene ". strlen($mensaje) ." letras";
}
?>