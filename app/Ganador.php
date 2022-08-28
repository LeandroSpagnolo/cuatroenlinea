<?php

namespace App;

include 'Ficha.php';
include 'Tablero.php';

interface interfazGanador{

    public function ganadorEjex(Tablero $tablero, int $x, int $y) : bool; // devuelve True o False dependiendo si hay un ganador en el eje X
    public function ganadorEjey(Tablero $tablero, int $x, int $y) : bool; // devuelve True o False dependiendo si hay un ganador en el eje Y
    public function ganadorDiagonal(Tablero $tablero, int $x, int $y) : bool; // devuelve True o False dependiendo si hay un ganador en la diagonal
    
}

class Ganador implements interfazGanador{

    public function ganadorEjeX(Tablero $tablero, int $x, int $y){

        $ficha = $tablero->devolverValorCasilla($x, $y);
        $contador = 0;
        for($i = 0; $i < $tablero->dimensionTableroX(); $i++){
            if($ficha == $tablero->devolverValorCasilla($i, $y)){
                $contador++;
            }
        }
        if($contador == 4){
            return true;
        }
        else{
            return false;
        }
    }

    public function ganadorEjeY(Tablero $tablero, int $x, int $y){
        $ficha = $tablero->devolverValorCasilla($x, $y);
        $contador = 0;
        for($i = 0; $i < $tablero->dimensionTableroY(); $i++){
            if($ficha == $tablero->devolverValorCasilla($x, $i)){
                $contador++;
            }
        }
        if($contador == 4){
            return true;
        }
        else{
            return false;
        }
    }

    

    


}