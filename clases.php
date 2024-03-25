<?php 
/* --------- Ejemplo #1 | Como lo haríamos sin programación orientada a objetos
$nombre = 'Enrique';
$edad = 24;
$pais = 'México';

$nombre2 = 'Axel';
$edad2 = 20;
$pais2 = 'España';

echo $nombre;
*/

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}

$enrique = new Persona;
$enrique->nombre = 'Enrique Tapia Antunes';
$enrique->edad = 24;
$enrique->pais = 'México';

$enrique->mostrarInformacion();
echo $enrique->nombre . ' tiene ' . $enrique->edad . ' años de edad. ';

$axel = new Persona;
$axel->nombre = 'Jonathan Axel Tapia Antunes';
$axel->edad = 20;
$axel->pais = 'México';




?>