<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio condicionales</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100vh;
            background: #1f1f1f;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #f2f2f2;
        }
        form, #resultado{
            padding: 2%;
            border: 1px solid #f2f2f2;
        }
    </style>
</head>
<body>
<div id="container" class="container">
    <form method="POST">
        <div>
            <label from="nombre">Nombre del cliente: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe el nombre del cliente">
        </div>
        <div>
            <label>Valor de la compra: </label>
            <input type="number" name="compra" id="compra" placeholder="Digite el valor de la compra">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php
    /*
    Imagine que la tienda donde usted trabaja ofrece descuentos a los clientes en Navidad, de acuerdo con el monto de su compra. El criterio para establecer el descuento se muestra a continuación:

    Si es menor a 50
    5%

    Si es mayor o igual a 50 y menor que 100
    10%

    Si es mayor o igual a 100 y menor o igual a 250
    15%

    Si es mayor a 250 y menor a 400
    20%

    Teniendo en cuenta la tabla, te piden que escribas un programa que solicite el nombre del cliente y el valor de la compra. Y que arroje como resultado: 

    Nombre del cliente
    Valor de la compra sin descuento
    Valor de la compra con descuento.

    Ahora responde el interrogante en un comentario multilínea ¿Cuál es el valor de las siguientes compras con descuento?

    Juan Pablo realizó una compra de 55 usd.
    Kenia Ortiz realizó una compra de 120 usd.
    Angie Andrade realizó una compra de 275 usd.
    Eva Castro realizó una compra de 350 usd.

    7. Sube el documento en la plataforma para su evaluación. 
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = htmlspecialchars($_POST["nombre"]);
        $compra = htmlspecialchars($_POST["compra"]);

        if ($compra < 50){
            $descuento = 0.05;
            $total = $compra * $descuento;
        }else if ($compra >= 50 && $compra < 100){
            $descuento = 0.1;
            $total = $compra * $descuento;
        }else if ($compra >=100 && $compra <= 250){
            $descuento = 0.15;
            $total = $compra * $descuento;
        }else if ($compra > 250 && $compra < 400){
            $descuento = 0.2;
            $total = $compra * $descuento;
        }else{
            $total  = 0;
        };

        echo"
        <div id='resultado'>
            <div> Nombre del cliente: ".$nombre."</div>
            <div> Valor de la compra sin descuento: ".$compra." usd</div>
            <div> Valor de la compra con descuento (".($descuento*100)."%): ".($compra-$total)." usd</div>
        </div>";
    }
    /*RESPUESTAS:
    Juan Pablo: 55 usd : 49.5 usd
    Kenia Ortiz: 120 usd : 102 usd
    Angie Andrade: 275 usd : 220 usd
    Eva Castro: 350 usd : 280 usd
    */
    ?>
</div>
</body>
</html>