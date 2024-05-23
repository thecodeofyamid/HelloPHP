<?php 
// public = acceder desde el objeto o desde la clase
// protected = se puede acceder únicamente en la clase
// private = Se puede acceder únicamente por la clase que contiene

//Clase Padre
class SelectionFutbol{
    public $id;
    public $edad;
    private $nombre;

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
    //Mostrar Valores
    public function getNombre(){
        return "<br>" . $this->nombre;
    }
    //Asignar o actualizar valores con set
    public function setNombre($nombre){
        $this->nombre = $nombre;
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
// echo $entrenador1->viajar();

$jugador1 = new Jugador(123,"Falcao García",33,"Delantero",7);
// echo $jugador1->viajar();

//Accedo desde el objeto
echo $jugador1->nombre;

//Acceso desde la clase
echo $jugador1->getNombre();
echo $jugador1->setNombre("Cuadrados");
echo $jugador1->getNombre();
?>