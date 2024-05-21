<?php 
/*
Imagina que comenzaste a ir al gimnasio y has creado la siguiente rutina de ejercicios que realizarás de lunes a viernes:

Lunes: Pecho, Espalda, Hombros,

Martes: Piernas, Glúteos, 

Miercoles: Bíceps, Espalda, Hombros,

Jueves: Tríceps, Bíceps,

Viernes: Piernas, Pantorrillas

 

Ahora, para que no se te olvide decides escribir un programa que almacene cada rutina y para saber qué ejercicio te toca simplemente debes colocar el nombre del día de la semana y esto te arrojará la rutina a realizar. Por ejemplo: Lunes: Tienes rutina de Pecho, Espalda y Hombros.
*/
function ejercicio($lista_ejercicios,$dia){
    echo"<div style='padding:2%; margin:2%; background: #111; display: flex; flex-direction: column; justify-content: center; align-items: center;'>";
    echo "Ejercicios para el día de hoy ". $dia ." son:" . "<br>";
    for ($i = 0; $i < count($lista_ejercicios); $i++) {
        echo "·) " . $lista_ejercicios[$i] . "<br>";
    }
    echo "</div>";
}
function hoy_toca($dia){
    $ejercicios = array(
        "lunes" => ["Pecho","Espala","Hombros"],
        "martes" => ["Piernas","Glúteos"],
        "miercoles" => ["Bíceps", "Espalda", "Hombros"],
        "jueves" => ["Tríceps","Bíceps"],
        "viernes" => ["Piernas","Pantorrillas"]
    );
    switch($dia){
        case "lunes":
           ejercicio($ejercicios["lunes"],"lunes");
           break;
        case "martes":
            ejercicio($ejercicios["martes"],"martes");
            break;
        case "miercoles":
            ejercicio($ejercicios["miercoles"],"miercoles");
            break;
        case "jueves":
            ejercicio($ejercicios["jueves"],"jueves");
            break;
        case "viernes":
            ejercicio($ejercicios["viernes"],"viernes");
            break;
        default:
            return "No hay ejercicios para este día, o no existe este día en el calendario";
    }  
}
echo "
<style>
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width:100%; 
    height: 100vh;
    background: #444;
}
</style>
<div style='display:grid; grid-template-columns: 1fr 1fr 1fr;background:#444444;color: #fff; width:100%; height: 100%'>";
echo hoy_toca("lunes");
echo hoy_toca("martes");
echo hoy_toca("miercoles");
echo hoy_toca("jueves");
echo hoy_toca("viernes");
echo "</div>";
?>