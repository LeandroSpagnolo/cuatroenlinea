<?php

namespace App;

include 'Ficha.php';

interface interfazTablero{

    public function dimensionTableroX() : int; // dimension del tablero en el eje X
    public function dimensionTableroY() : int; // dimension del tablero en el eje Y
    public function limpiarTablero();//Vuelve al tablero en su estado original sin fichas
    public function ingresoUsuarioFicha(int $x,Ficha $ficha);//Pone una ficha arriba de la ficha de mas altura en y
    public function sacarFichaUsuario(int $x); //Se fija cual es la ficha de mas altura en el eje y, y la saca
    public function devolverValorCasilla(int $x,int $y);//devuelve el valor de la casilla dada
}


class Tablero implements interfazTablero
{
    protected int $dimX;
    protected int $dimY;

    protected $tablero;


    public function __construct (int $dim_x = 7, int $dim_y = 7) {
        if($dim_x <= 4 && $dim_y <= 4){
            throw new Exception("El tablero debe ser de al menos 4 por 4");
        }

        $this->dimX = $dim_x;
        $this->dimY = $dim_y;

        $this->limpiarTablero();
    }
    
    public function dimensionTableroX() : int{
        return $this->dimX;
    }

    public function dimensionTableroY() : int{
        return $this->dimY;
    }

    
    public function limpiarTablero(){
        for($x = 0; $x < $this->dimensionTableroX(); $x++){
            for($y = 0; $y < $this->dimensionTableroY(); $y++){
                $this->tablero[$x][$y] = "0";
            }
        }
    } 
    

    protected function ponerFicha(int $x, int $y, Ficha $ficha){

        if($x > $this->dimensionTableroX() || $y > $this->dimensionTableroY()){
            throw new Exception("ingrese valores de posicion dentro del rango del tablero");
        }

        $this->tablero[$x][$y] = $ficha;
    }

    public function ingresoUsuarioFicha(int $x,Ficha $ficha){

        if(hayFicha($x,0)){
            throw new Exception("La columna esta llena");
        }
        
        for($y = dimensionTableroY(); $y > 0; $y--){
            if(hayFicha($x,$y) != TRUE){
                ponerFicha($x,$y,$ficha)

                //No se porq php no reconoce el break
                break 0;
            }
        }

    }

    //No se si hace falta una funcion para sacar fichas
    protected function sacarFicha(int $x, int $y){

        if($x > $this->dimensionTableroX() || $y > $this->dimensionTableroY()){
            throw new Exception("ingrese valores de posicion dentro del rango del tablero");
        }

        $this->tablero[$x][$y] = "0";
    }

    public function sacarFichaUsuario(int $x){

        if(hayFicha($x,dimensionTableroY()) == FALSE){
            throw new Exception("No hay fichas que sacar");
        }

        for($y = 0; $y < dimensionTableroY(); $y++){
            if(hayFicha($x,$y) == TRUE){
                sacarFicha($x,$y)
                //No se porq php no reconoce el break
                break 0;
            }
        }
    }
    
    
    protected function hayFicha(int $x, int $y){

        if($x > $this->dimensionTableroX() || $y > $this->dimensionTableroY()){
            throw new Exception("ingrese valores de posicion dentro del rango del tablero");
        }

        if($this->tablero[$x][$y] != "0")
            return TRUE;
        else
            return FALSE;
    }
    
    

    public function devolverValorCasilla(int $x,int $y){

        if($x > $this->dimensionTableroX() || $y > $this->dimensionTableroY()){
            throw new Exception("ingrese valores de posicion dentro del rango del tablero");
        }

        if($this->tablero[$x][$y] == "0"){
            return $this->tablero[$x][$y];
        }
        else{
            return $this->tablero[$x][$y]->queColorSoy();
        }
    }
}
