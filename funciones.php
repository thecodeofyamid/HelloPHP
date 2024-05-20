<?php
/*function saludo(){
    echo "Hola programador" . "<br>";
}

saludo();
saludo();
$numero = 5;
echo $numero . "<br>";
saludo();
saludo();*/

/*function suma(){
    $numero_1 = 5;
    $numero_2 = 5;

    echo $numero_1 + $numero_2 . "<br>";
}
suma();
suma();
suma();*/

/*
FUNCIONES CON PARAMETROS

function saludo($nombre){
    echo "¡Hola ".$nombre." eres un gran programador!"."<br>";
}

saludo("Yamid");
saludo("Katherine");
saludo("Karen");*/

function operar($num1,$num2,$operacion){
    switch ($operacion){
    case "sumar":
        $resultado = $num1 + $num2;  
        break;  
    case "restar":
        $resultado = $num1 - $num2;
        break;    
    case "multiplicar":
        $resultado = $num1 * $num2;    
        break;
    case "dividir":
        $resultado = $num1 / $num2;
        break;    
    default:
        $resultado = "No se reconoce la operación";
    }
    return $resultado;
}
echo operar(15,20,"sumar") . "<br>";
echo operar(15,20,"restar") . "<br>";
echo operar(15,20,"multiplicar") . "<br>";
echo operar(15,20,"dividir") . "<br>";


?>