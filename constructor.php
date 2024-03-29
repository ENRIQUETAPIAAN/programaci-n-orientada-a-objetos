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
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}

$enrique = new Persona('Enrique Tapia Antunes',23,'México');
$enrique->mostrarInformacion();

$janis = new Persona('Janis Tapia', 17, 'México');
$janis->mostrarInformacion();
/*
$enrique->nombre = 'Enrique Tapia Antunes';
$enrique->edad = 24;
$enrique->pais = 'México';

echo '<br>';

$janis = new Persona;
$janis->nombre = 'Janis Ruby Tapia Antunes';
$janis->edad = 17;
$janis->pais = 'México';
$janis->mostrarInformacion();
*/

?>