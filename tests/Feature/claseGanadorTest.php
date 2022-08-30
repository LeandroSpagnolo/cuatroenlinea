<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class claseGanadorTest extends TestCase
{
    public function test_ganador_eje_X()
    {
        $tablero = new Tablero(7,7);
        $fichaAzul = new Ficha("azul");
        $fichaRoja = new Ficha("rojo");
        $ganador = new Ganador;

        $tablero->ponerFichaUsuario(0,$fichaAzul);
        $tablero->ponerFichaUsuario(1,$fichaAzul);
        $tablero->ponerFichaUsuario(2,$fichaAzul);
        $tablero->ponerFichaUsuario(3,$fichaAzul);

        $this->assertTrue($ganador->verificarGanador($tablero,3,6) == "azul");
    }

    public function test_ganador_eje_Y()
    {
        $tablero = new Tablero(7,7);
        $fichaAzul = new Ficha("azul");
        $fichaRoja = new Ficha("rojo");
        $ganador = new Ganador;

        $tablero->ponerFichaUsuario(0,$fichaAzul);
        $tablero->ponerFichaUsuario(0,$fichaAzul);
        $tablero->ponerFichaUsuario(0,$fichaAzul);
        $tablero->ponerFichaUsuario(0,$fichaAzul);

        $this->assertTrue($ganador->verificarGanador($tablero,0,3) == "azul");
    }

    public function test_ganador_Diagonal()
    {
        $tablero = new Tablero(7,7);
        $fichaAzul = new Ficha("azul");
        $fichaRoja = new Ficha("rojo");
        $ganador = new Ganador;

        $tablero->ponerFichaUsuario(1,$fichaAzul);
        $tablero->ponerFichaUsuario(2,$fichaAzul);
        $tablero->ponerFichaUsuario(2,$fichaAzul);
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $tablero->ponerFichaUsuario(0,$fichaRoja);
        $tablero->ponerFichaUsuario(1,$fichaRoja);
        $tablero->ponerFichaUsuario(2,$fichaRoja);
        $tablero->ponerFichaUsuario(3,$fichaRoja);

        $this->assertTrue($ganador->verificarGanador($tablero,3,3) == "rojo");
    }
}
