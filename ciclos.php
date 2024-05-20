<?php 
//ciclo while

//Imprimir los números de 1 al 10
//Imprimir las tablas de multiplicar;
$j = 1;
$i = 1;
$num = 2;
echo "CICLO WHILE". '<br>';
while ($i <= 10){
    echo $i++ * $num." ";
};
echo '<br>'."CICLO DO-WHILE". '<br>';
do{
    echo $j. '<br>';
    $j++;
}while($j<=10);
echo "Fin de la instrucción";

echo '<br>'."CICLO FOR". '<br>';
for($k = 1; $k <=10; $k++){
    echo $k . '<br>';
}
?>