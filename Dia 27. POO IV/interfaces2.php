<?php
 // EL CONCEPTO DE LA HERENCIA EN POO
 // TENEMOS LA CLASE ANIMAL...
 // TIENE ATRIBUTOS Y TIENE MÉTODOS. 
 // 

 interface Vertebrado{
    function correr();
    function caminar();
    function estirarColumna();
 }

 interface Animal{
    function comer();
    function hacerSonido();
    function dormir();
 }

 abstract class Amfibio {

    public $nombre;

    function salirDelAgua(){
        print 'saliendo del agua';
    }

    function salirDelAgua2(){
        print 'saliendo del agua';
    }

    function salirDelAgua3(){
        print 'saliendo del agua';
    }
    
    abstract function entrarEnElAgua();
 }

class Rana extends Amfibio{
    function entrarEnElAgua(){
        
    }
}

 class Mamifero implements Vertebrado, Animal {
    // en realidad, aunque no lo veamos, están TODOS los atributos
    // y los métodos de la clase padre, en este caso de Animal
    public $tipoPelo;
    public $pezunyas;

    function correr(){

    }
    function caminar(){

    }
    function estirarColumna(){

    }
    function comer(){
        print 'comiendo';
    }
    function dormir(){

    }

    public function hacerSonido(){
        echo 'El animal hace un sonido y es un mamifero';
        echo '</br>';
    }

    public function amamantarCrias(){
        echo 'alimentando peques';
        echo '</br>';
    }
 }


 class Oviparo extends Mamifero {
 } 






 class Reptil extends Animal {
    // en realidad, aunque no lo veamos, están TODOS los atributos
    // y los métodos de la clase padre, en este caso de Animal
    public $esVenenoso;
    public $habitatAcuatico;

    public function hacerSonido(){
        echo 'El animal hace un sonido y es un reptil';
        echo '</br>';
    }

    public function tenerCriasConHuevos(){
        echo 'teniendo crías';
        echo '</br>';
    }
 }

 $oso = new Mamifero();
 $oso->comer();
 $oso->amamantarCrias();
 $oso->hacerSonido();
 $cocodrilo = new Reptil();
 $cocodrilo->tenerCriasConHuevos();
 $cocodrilo->dormir();
 $cocodrilo->hacerSonido();



?>