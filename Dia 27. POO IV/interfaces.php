
<?php
// Hemos vista la herencia (una clase hereda de otra todos sus métodos y atributos)
// RECORDAD: la herencia es simple. SOLO puedo heredar de un padre.
// AHORA VEMOS LA INTERFAZ...



interface Automobil {
    function acelerar();
    function frenar();
    function abrirPuertas();
    function llenarCombustible();
    function abrirMaletero();
    function aparcar();
}

abstract class Coche {
    public $modelo;
    public $velocidad;
    public $numPuertas;

    abstract public function acelerar();
    abstract function frenar();
    abstract function abrirPuertas();
    abstract function llenarCombustible();
    abstract function abrirMaletero();
    abstract function aparcar();
}

class todoTerreno extends Coche {
    function acelerar(){

    }
    function frenar(){

    }
    function abrirPuertas(){

    }
    function llenarCombustible(){

    }
    function abrirMaletero(){

    }
    function aparcar(){

    }

    function aparcandoSuv(){

    }
}


class SUV implements Automobil {

    public $altura;
    public $modelo;

    function acelerar(){
    }
    function frenar(){
    }
    function abrirPuertas(){
    }
    function llenarCombustible(){
    }
    function abrirMaletero(){
    }
    function aparcar(){
    }
    function aparcandoSuv(){
    }
}

class Nissan extends SUV {

}




?>