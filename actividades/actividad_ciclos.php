<?php 

//Te piden que escribas un programa que calcule el factorial de los siguientes números: 5, 10, 15 y 20. El resultado debes colocarlo en un comentario multilíneas. 

echo "FACTORIAL" . "<br>";
$i=0;
$total = 1;
$num_1 = 5;
$num_2 = 10;
$num_3 = 15;
$num_4 = 20;

do{
    $i++;
    $total *= $i ;
    if($i == $num_4){
        echo "Factorial = ".$total."<br>";
    }
}while($i < $num_4);

/*
Factorial_de_5 = 120;
Factorial_de_10 = 3628800;
Factorial_de_15 = 1307674368000;
Factorial_de_20 = 2432902008176640000;
*/
?>