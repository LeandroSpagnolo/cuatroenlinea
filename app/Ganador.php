<?php

namespace App;

include 'Ficha.php';
include 'Tablero.php';

interface interfazGanador{

    public function verificarGanador(Tablero $tablero, int $x, int $y); //devuelve el color del jugador quien gano el juego en caso de ganar, si no devuelve "nadie"
    
}

class Ganador implements interfazGanador{


    public function verificarGanador(Tablero $tablero, int $x, int $y){


        if(ganadorEjeX($tablero,$x,$y) == TRUE || ganadorEjeY($tablero,$x,$y) == TRUE || ganadorDiagonal($tablero,$x,$y) == TRUE){
            return $tablero->devolverValorCasilla($x,$y);
        }

        else{
            return "nadie";
        }

    }


    public function ganadorEjeX(Tablero $tablero, int $x, int $y){

        $ficha = $tablero->devolverValorCasilla($x, $y);
        $contador = 0;
        for($i = 0; $i < $tablero->dimensionTableroX(); $i++){
            if($ficha == $tablero->devolverValorCasilla($i, $y)){
                $contador++;
            }
        }
        if($contador == 4){
            return TRUE;
        }
        else{
            return FALSE;
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
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function ganadorDiagonal(Tablero $tablero, int $x, int $y){
        $ficha = $tablero->devolverValorCasilla($x, $y);
        $contador = 0;
        $ganador = FALSE;

        for($posicionX = $x - 3,$posicionY = $y - 3; $posicionX != $x + 3 && $posicionY != $y  + 3; $posicionX++, $posicionY++){

            if($posicionX <= $tablero->dimensionTableroX() && $posicionX >= 0 && $posicionY <= $tablero->dimensionTableroY() && $posicionY >= 0 ){
                if($ficha == $tablero->devolverValorCasilla($x,$y)){
                    $contador++;
                }
                else{
                    $contador = 0;
                }
            }
        }

        if($contador >= 4){
            $ganador = TRUE;

            return $ganador;
        }

        for($posicionX = $x + 3, $posicionY = $y - 3; $posicionX != $x - 3 && $posicionY != $y + 3; $posicionX--, $posicionY++){

            if($posicionX <= $tablero->dimensionTableroX() && $posicionX >= 0 && $posicionY <= $tablero->dimensionTableroY() && $posicionY >= 0 ){
                if($ficha == $tablero->devolverValorCasilla($x,$y)){
                    $contador++;
                }
                else{
                    $contador = 0;
                }
            }

        }

        if($contador >= 4){
            $ganador = TRUE;

            return $ganador;
        }

    }
    
}