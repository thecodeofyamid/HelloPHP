<?php 

//Clase
class Jugador{
    //propiedades de una clase
    public $nombre;
    public $posicion;
    public $numero;

    //metodos de una clase
    public function entrenar(){
        echo $this->nombre . "está entrenando...<br>";
    }

    public function jugar(){
        echo  $this->nombre . " está jugando...<br>";
    }
}


//instancias de una clase
$jugador1 = new Jugador();
$jugador1->nombre =  "Cristiano Ronaldo";
$jugador1->posicion =  "Delantero";
$jugador1->numero = 7;
$jugador1->entrenar();

$jugador2 = new Jugador();
$jugador2->nombre =  "James Rodríguez";
$jugador2->posicion =  "Delantero";
$jugador2->numero = 10;
$jugador2->jugar();

echo "<pre>";
var_dump($jugador1);
var_dump($jugador2);
echo "</pre>";
?>