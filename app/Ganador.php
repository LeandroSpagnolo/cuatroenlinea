<?php

namespace App;

include 'Ficha.php';
include 'Tablero.php';

interface interfazGanador{

    public function ganadorEjex() : bool; // devuelve True o False dependiendo si hay un ganador en el eje X
    public function ganadorEjey() : bool; // devuelve True o False dependiendo si hay un ganador en el eje Y
    public function ganadorDiagonal() : bool; // devuelve True o False dependiendo si hay un ganador en la diagonal
    
}