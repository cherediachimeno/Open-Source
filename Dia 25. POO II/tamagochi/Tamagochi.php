<?php

class Tamagochi
{
    protected $nombre;
    protected $especie;
    protected $felicidad;
    protected $hambre;
    protected $suenyo;
    protected $vida;

    function __construct($nombre, $especie)
    {
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->felicidad = 50;
        $this->hambre = 50;
        $this->suenyo = 0;
        $this->vida = 100;
    }

    function comer($tipoComida)
    {
        switch ($tipoComida) {
            case "berenjena":
                $this->hambre -= 30;
                break;
            case "donut":
                $this->hambre -= 20;
                $this->vida -= 150;
                break;
            case "fideos":
                $this->hambre -= 50;
                break;
            case "platano":
                $this->hambre -= 30;
                break;
            case "nada":
                $this->hambre += 30;
        }
        if ($this->hambre < 0) {
            $this->hambre = 0;
        }

        if ($tipoComida == "nada") {
            return "El tamagochi no come nada, tiene hambre... </br> De hecho
            el hambre del tamagochi es de... " . $this->hambre;
        } else {
            return 'El tamagochi está comiendo ' . $tipoComida . "
        </br>
        El hambre del tamagochi es de... " . $this->hambre;
        }
    }

    function comprobarSalud()
    {
        if ($this->vida <= 0) {
            return 'Es la muerte';
        } else {
            return 'La salud del Tamagochi es de '. $this->vida;
        }
    }
}
