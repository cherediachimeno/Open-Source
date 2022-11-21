<?php
 // EL CONCEPTO DE LA HERENCIA EN POO
 // TENEMOS LA CLASE ANIMAL...
 // TIENE ATRIBUTOS Y TIENE MÉTODOS. 
 // 

 class Animal {
    public $nombre;
    public $especie;
    public $altura;
    public $peso;
    public $habitat;

    public function comer(){
        echo 'El animal está comiendo desde la clase Animal';
        echo '</br>';
    }

    public function hacerSonido(){
        echo 'El animal hace un sonido';
        echo '</br>';
    }


    public function dormir(){
        echo 'El animal está dormiendo';
        echo '</br>';
    }

 }

 class Mamifero extends Animal {
    // en realidad, aunque no lo veamos, están TODOS los atributos
    // y los métodos de la clase padre, en este caso de Animal
    public $tipoPelo;
    public $pezunyas;

    public function hacerSonido(){
        echo 'El animal hace un sonido y es un mamifero';
        echo '</br>';
    }

    public function amamantarCrias(){
        echo 'alimentando peques';
        echo '</br>';
    }
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