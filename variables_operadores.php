<?php
    /*
        VARIABLES
        Las variables son la pieza fundamental de los programas pues permiten almacenar y manipular datos. PHP es un lenguaje de tipado dinámico, lo que significa que NO NECESITAS DECLARAR EL TIPO DE DATO de una variable explícitamente

        TIPOS DE DATOS
        Escalares: Son aquellos que contienen un sólo valor a la vez. 
        Representan una única magnitud o cantidad (Boolean, Integer, Float, String)
            - integers : ... -2, -1, 0, 1, 2
            - floats : ... -2.5, -1.5, -0.5, 0.5, 1.5, 2.5 ...
            - strings: "Hola mundo","Maria,"fe"
            - booleans: true, false

        Compuestos: Son aquellos que pueden contener multiples datos, o estructuras complejas
            - arrays (matrices): Estructura de datos que contiene una colección de elementos, cada uno es identificado por una clave o índice. Permite almacenar múltiples valores con un sólo nombre. Para acceder a cada valor se hace através de su indice. Por ejemplo: [1,2,3,4,5], ["a","b","c","d"]
                -Tipos:
                    - Unidimensional (vectores) 
                        $vector = array(1,2,3);
                    - Multidimensional (Matrices o tablas)
                        $matriz = array(
                            array(1,2,3),
                            array(4,5,6),
                            array(7,8,9)
                        );
                    - Asociativos: Utilizan claves nombradas, en lugar de indices
                        $persona = array(
                            $nombre => "Yamid",
                            $edad => 21,
                            $ciduad => Chitagá
                        );
            - objects (objetos): Un objeto es una instancia de una clase que puede contener tanto datos (propiedades) como funciones (métodos). Por ejemplo:
                class Persona{
                    public nombre,
                    public ciudad
                };
                $persona = new Persona()

        Especiales: Llamados así porque tienen caracteristicas únicas y propositos especiales la gestión de datos y recursos de PHP.
            - NULL (vacio): ausencia de valor.
            - resources: entidad externa gestionada por PHP como conexión a bases de datos, o archivos abiertos.
        
        OPERADORES
        Permiten manipular datos y manejar el flujo del programa.
            - TIPO DE OPERADORES:
                - ARITMETICOS: Para realizar operaciones matemáticas sobre variables o valores.
                    suma(+), resta(-), multiplicación(*), división(/), exponenciación(**), módulo(%)
                - DE ASIGNACIÓN: Se utilizan para escribir un valor en una variable.
                    asignación simple(=), con adición(+=), con resta(-=), con multiplicación(*=), con división(/=), con módulo(%=), con potenciación(**=)
                - DE COMPARACIÓN: Se utiliza para comparar dos valores y devuelven un valor booleano.
                    igual(revisa si los valores son iguales ==),identico(revisa si tanto los valores como el tipo de dato son iguales ===), distinto(!=), No identico(!==), menor que(<), mayor que(<), menor o igual que(<=), mayor o igual que(>=), Nave espacial(compara dos expresiones, devuelve -1, 0 o 1 si el operando izquierdo es menor, igual o mayor que el operando de la derecha. Sirve para comparar enteros, cadenas y hasta listas <=>)
                - LÓGICOS: Se utilizan para combinar dos declaraciones condicionales.
                    Y(&& o and(pero este tiene menor precedencia)), O(|| o or(pero este tiene menor precedencia)), NO(!), XOR(devuelve true si uno, y solo uno de los operadores es true, pero no ambos xor ó ^)
                - DE INCREMENTO/DECREMENTO: Se utilizan para aumentar o disminuir el valor de una variable en 1.
                    incremento($a++ ó ++$a), decremento($a-- ó --$a)
                - DE CADENA: 
                    concatenación (.), asignación con concatenación (Añade el operando derecho al final del operando izquierdo .=)
                - DE ARRAY:
                    Unión (une dos arrays + (util para mantener los mismos valores, pero añadir más elementos, no reemplaza valores con claves duplicadas del segundo array, Sólo añade elementos del segundo array si su clave no está en el primer array), array_merge( , ) util para combinar dos arrays, y permitir que el segundo array sobreescriba elementos del primero, reemplaza valores con claves duplicadas del segundo array), igualdad(comprueba si los dos arrays tienen las mismas claves y valores ==), identidad(comprueba si los dos arrays tienen las mismas claves y valores en el mismo orden y de los mismos tipos ===), desigualdad(!=), no identidad(!==)
                - DE EJECUCIÓN: Se utilizan para ejecutar comandos del sistema operativo (  El comando entre las comillas invertidas se ejecuta en el shell del sistema y su salida se asigna a la variable `` ó La función exec() también se utiliza para ejecutar comandos del sistema, pero a diferencia del operador de ejecución, no captura toda la salida del comando. Devuelve el último línea de la salida del comando, y puedes capturar esta salida en una variable exec())
                - DE CONTROL DE ERRORES: Se utilizan para suprimir errores de expresiones específicas.
                    Control de errores(@ suprime los mensajes de error generados por una expresión)
                - DE TIPO: Se utilizan para comprobar o cambiar el tipo de una variable.
                    instanceof: Comprueba si una variable es una instancia de una clase (variable instanceof MyClass)
    */
    $a = array(1,2,3,4);
    $b = array(1,2,3,4,5,6);
    $resultado = $a + $b;
    $resultado_b = array_merge($a, $b);

    foreach($resultado as $indice => $valor){
        echo(htmlspecialchars($valor).", ");
    } // resultado = (1,2,3,4,5,6)
    echo("<br>");
    foreach($resultado_b as $indice => $valor){
        echo(htmlspecialchars($valor).", ");
    } // resultado = (1,2,3,4,1,2,3,4,5,6)
    echo("<br");
?>