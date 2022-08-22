<?php

namespace App;


interface interfazFicha{

    public function queColorSoy(); 
}


class Ficha implements interfazFicha
{
    protected string $color;



    public function __construct ($colorIngresado) {

        if($colorIngresado != "azul" && $colorIngresado != "rojo" ){
            throw new Exception("La ficha tiene que ser de color rojo o azul");
        }

        $this->color = $colorIngresado;

        
    }

    public function queColorSoy(){
        return $this->color;
    }

}