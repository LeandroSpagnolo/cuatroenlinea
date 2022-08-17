<?php

namespace App;

use Ficha;

interface interfazTablero{

    public function dimensionTableroX() : int; // dimension del tablero en el eje X
    public function dimensionTableroY() : int; // dimension del tablero en el eje Y
    public function limpiarTablero();//Vuelve al tablero en su estado original sin fichas
    public function ponerFicha(int $x, int $y, Ficha $ficha);//POne una ficha arriba de la ficha de mas altura en y
    public function sacarFicha(int $x); //Se fija cual es la ficha de mas altura en el eje y, y la saca
    public function hayFicha(int $x, int $y); //devuelve True o False dependiendo si hay una ficha en la posicion

}


class Tablero implements interfazTablero
{
    protected int $dimX;
    protected int $dimY;


    public function __construct (int $dim_x = 7, int $dim_y = 6) {
        if(dim_x <= 3 && dim_y <= 3){
            throw new Exception("El tablero debe ser de al menos 3 por 3");
        }

        $this->$dimX = $dim_x;
        $this->$dimY = $dim_y;
    }  
}