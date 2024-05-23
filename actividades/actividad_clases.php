<?php
/*
Implementa un programa con una clase llamada Persona que contenga dos atributos: nombre y edad. Además, que contenga un método llamado imprimir que devuelva el nombre y la edad.


Después, crea otra clase llamada Ciudadano, que herede de la clase Persona y agregue un atributo llamado depósito. Además, contendrá el método llamado imprimir para mostrar el depósito.  Así mismo cree otro método llamado impuestos y si el depósito es superior a 3000 usd muestre que SI debe pagar, caso contrario no deberá pagar. Los datos para este ejercicio son los siguientes:

 

Nombre

Edad

Depósito

Mariano

25

5700

Leonel 

56

3500

Yaneth 

34

8400

Martín 

45

2500


*/
class Persona{
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad){
        $this-> nombre = $nombre;
        $this-> edad = $edad;
    }

    public function imprimir(){
        return $this->nombre." ".$this->edad;
    }
}

class Ciudadano extends Persona{
    public $deposito;
    
    public function __construct($nombre, $edad,$deposito){
        parent::__construct($nombre,$edad);
        $this->deposito = $deposito;
    }

    public function imprimir(){
        parent::imprimir();
        return $this->nombre . " " . $this->deposito . ": ";
    }

    public function impuestos(){
        if ($this->deposito > 3000){
            return  "Debes pagar impuestos $" . "<br>";
        }else{
            return "No debes pagar impuestos $" . "<br>";
        }
    }
}
$mariano = new Ciudadano("Mariano",25,5700);
$leonel = new Ciudadano("Leonel",56,3500);
$yaneth = new Ciudadano("Yaneth",34,8400);
$martin = new Ciudadano("Martín",45,2500);
echo $mariano->imprimir();
echo $mariano->impuestos();
echo $leonel->imprimir();
echo $leonel->impuestos();
echo $yaneth->imprimir();
echo $yaneth->impuestos();
echo $martin->imprimir();
echo $martin->impuestos();

/*
Mariano 5700: Debes pagar impuestos 
Leonel 3500: Debes pagar impuestos 
Yaneth 8400: Debes pagar impuestos 
Martín 2500: No debes pagar impuestos 
*/
?>