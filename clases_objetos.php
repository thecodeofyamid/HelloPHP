<?php 

//Clase
class Jugador{
    //propiedades de una clase
    public $nombre;
    public $posicion;
    public $numero;

    //constructor
    public function __construct($nombre, $posicion, $numero) {
        $this->nombre = $nombre;
        $this->posicion = $posicion;
        $this->numero = $numero;
    }

    //metodos de una clase
    public function entrenar(){
        echo $this->nombre . " está entrenando...<br>";
    }

    public function jugar(){
        echo  $this->nombre . " está jugando...<br>";
    }
}

//instancias de una clase
$jugador1 = new Jugador("Cristiano Ronaldo","Delantero",7);
$jugador1->entrenar();

$jugador2 = new Jugador("James Rodriguez","Delantero",10);
$jugador2->jugar();

//imprimir
echo "<pre>";
var_dump($jugador1);
var_dump($jugador2);
echo "</pre>";
?>