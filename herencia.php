<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais . '<br>';
    }
}

class Estudiante extends Persona{
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona{
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

$enrique = new Trabajador('Enrique Tapia', 24, 'México', 'Cell Leader');
echo $enrique->trabajo;

/*
class Estudiante{
    public $nombre;
    public $edad;
    public $pais;
    public $carrera;

    function __construct($nombre, $edad, $pais, $carrera){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        $this->carrera = $carrera;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais . '<br>';
    }
}

$valery = new Estudiante('Valery Castañeda', 29, 'España', 'Ingeniero Industrial');
echo $valery->carrera;
*/

?>