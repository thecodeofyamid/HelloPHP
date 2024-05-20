<?php
// Un arreglo es un mapa, un mapa es un tipo de dato que asocia las claves y valores.

// formas de declarar una array.
$arreglo_1 = array("Elemento1","Elemento2",2,3,4,5,true,false);
$arreglo_2 = ["ElementoA","ElementoB",1,5,7,9,true,false];
$arreglo_3 = array(
    'nombre' => 'Yamid',
    'edad' => 21,
    'celular' => 3133229392
); // clave/valor

echo "<pre>";
var_dump($arreglo_1);
var_dump($arreglo_2);
var_dump($arreglo_3);
echo "</pre>";

// agregar valor
$arreglo_3['nombre'] = 'Horacio';
// modificar valor
$arreglo_3['edad'] = 21.9;
// eliminar último elemento
array_pop($arreglo_3);
// Encontrar valores en el array
$valor_encontrado = in_array(21, $arreglo_1);


//otra forma de validar xd
for ($i = 0; $i<count($arreglo_1); $i++){
    if ($arreglo_1[$i] == 21){
        $valor_encontrado = true;
    }else{
        $valor_encontrado = false;
    }
    if ($arreglo_1[$i] === false){
        $arreglo_1[$i] = 0;
    }
    echo $arreglo_1[$i] . "<br>";
}

echo "<pre>";
var_dump($arreglo_1);
var_dump($arreglo_2);
var_dump($valor_encontrado);
echo "</pre>";
?>
