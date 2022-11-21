<?php

interface Automobiles {
    function abrirPuertas();
    function cerrarPuertas();
    function acelerar();
    function frenar();
    function chocar();
}

interface Electrico {
    function conectarBateria();
    function recargar();
}

abstract class Coches implements Automobiles, Electrico {
    public $precio;
    public $modelo;
    public $velocidad;

    function __construct($modelo){
        $this->modelo = $modelo;
    }
    
    abstract function conectarBateria();

    abstract function recargar();

    function abrirPuertas(){
        print 'abriendo puertas desde la clase coches';
    }

    function cerrarPuertas(){
        print 'cerrando puertas';
    }

    function acelerar(){
        print 'acelerando';
    }

    function frenar(){
        print 'frenar';
    }

    function chocar(){
        print 'chocando';
    }

    private function comprobarAveria(){
        print 'comprobando averia';
    }

    function llamarMecanico(){
        print 'vamos a ver...';
        print '</br>';
        $this->comprobarAveria();
    }
}

abstract class BMW extends Coches {

    public $ordenadorAbordo;
    public $telefono;
  
    public function acelerandoBMW(){
        print 'acelerando BMW';
    }

    abstract function recargar();

    public function conectarBateria()
    {
        
    }
}

class SERIE3 extends BMW {
    public function recargar(){
        
    }

    function abrirPuertas(){
        print 'abriendo puertas desde la clase SERIE 3';
    }
}

class Renault extends Coches {
    public $ordenadorRenault;
    public $GPSforSCENIC;

    public function encenderRenault(){
        print 'encendiendo mi RENAULT';
    }

    public function recargar(){
        print 'recargar bateria';
    }

    public function conectarBateria(){
        print 'conectar bateria';
    }
}


$bmw = new SERIE3("serie 3");
$bmw->abrirPuertas();

$clio = new Renault("clio 5");
$clio->llamarMecanico();
$clio->encenderRenault();

?>