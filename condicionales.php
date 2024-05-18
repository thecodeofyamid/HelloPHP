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

//condicional else if = encadenar condiciones
echo "<br>";
$edad = 21;

if ($edad > 21){
    echo "Eres mayor a 21";
}else if ($edad == 21){
    echo "Tienes 21";
}else{
    echo "Eres menor de 21";
};

//operadores ternarios
/* Para que un alumno gane una asignatura debe sacar más de 3.0 en la nota definitiva. Caso contrario pierde la asignatura 

if($nota > 3){
    echo "Ganaste la asignatura";
}else{
    echo "Perdiste la asignatura";
}
*/
echo "<br>";
$nota = 4.0;
echo ($nota > 3 ? "Aprobaste":"Reprobaste");

//switch
echo "<br>";
$color_fav = "verde";

switch($color_fav){
    case "rojo":
        echo "Tu color favorito es rojo";
        break;
    case "negro":
        echo "Tu color favorito es negro";
        break;
    case "amarillo":
        echo "Tu color favorito es amarillo";
        break;
    case "azul":
        echo "Tu color favorito es azul";
        break;
    default:
        echo "Tu color favorito no es ni rojo, ni negro, ni amarillo, ni azul";
}
?>