<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}

$enrique = new Persona;
$enrique->nombre = 'Enrique Tapia Antunes';
$enrique->edad = 24;
$enrique->pais = 'México';
$enrique->mostrarInformacion();

echo '<br>';

$janis = new Persona;
$janis->nombre = 'Janis Ruby Tapia Antunes';
$janis->edad = 17;
$janis->pais = 'México';
$janis->mostrarInformacion();


?>