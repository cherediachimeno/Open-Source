<?php

class Persona {
    // CLASE PERSONA COMPUESTA DE DOS GRANDES ELEMENTOS.
    // PRIMERO, LOS ATRIBUTOS/PROPIEDADES

    protected $nombre;
    protected $apellido;
    protected $dni;
    protected $direccionPostal;

    // SEGUNDO, LAS FUNCIONES/MÉTODOS
    // el primer gran método. el constructor. Es el método por el que pasa el objeto nada más crearse
    // nos permite incorporar información concreta y que al programador le interesa al objeto recién creado
    
    function __construct($nombre, $apellido, $dni, $direccion){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->direccionPostal = $direccion;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }
    
    function getDNI(){
        return $this->dni;
    }

    function setDNI($dni){
        $this->dni = $dni;
    }

    function getDireccion(){
        return $this->direccionPostal;
    } 

    function setDireccion($direccion){
        $this->direccionPostal = $direccion;
    }

}

?>