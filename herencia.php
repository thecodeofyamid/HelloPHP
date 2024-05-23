<?php 
//Clase Padre
class SelectionFutbol{
    public $id;
    public $edad;
    public $nombre;

    public function __construct($id, $nombre,$edad){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function concentrarse(){
        echo $this->nombre . " está en concentración...";
    }
    public function viajar(){
        echo $this->nombre . " está en viajando...";
    }
}   

//Clase Hija
class Jugador extends SelectionFutbol{
    public $posicion;
    public $numero;

    public function __construct($id,$nombre,$edad,$posicion,$numero){
        parent::__construct($id,$nombre,$edad);
        $this->posicion = $posicion;
        $this->numero = $numero;
    }
    public function entrenar(){
        echo $this->nombre . " está entrenando...<br>";
    }

    public function jugar(){
        echo  $this->nombre . " está jugando...<br>";
    }
}   

class Entrenador extends SelectionFutbol{
    public $experiencia;

    public function __construct($id,$nombre,$edad,$experiencia){
        parent::__construct($id,$nombre,$edad);
        $this->experiencia = $experiencia;
    }

    public function dirigir_entrenamiento(){
        echo $this->nombre . " está en dirigiendo el entrenamiento...";
    }
    public function dirigir_partido(){
        echo $this->nombre . " está en dirigiendo el partido...";
    }
}   

$entrenador1 = new Entrenador(123,"Anacleto",50,20);
echo $entrenador1->viajar();

$jugador1 = new Jugador(123,"Falcao García",33,"Delantero",7);
echo $jugador1->viajar();
?>