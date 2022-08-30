<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class claseTableroTest extends TestCase
{
    public function test_crear_tablero()
    {
        $tablero = new Tablero(7,7);

        $this->assertTrue($tablero->devolverValorCasilla(0,0) == 0 && $tablero->devolverValorCasilla(6,6) == 0);
    }

    public function test_colocar_fichas()
    {
        $tablero = new Tablero(7,7);
        $fichaAzul = new Ficha("azul");
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $fichaRoja = new Ficha("rojo");
        $tablero->ponerFichaUsuario(3,$fichaRoja);
        
        $this->assertTrue($tablero->devolverValorCasilla(3,6) == "azul" && $tablero->devolverValorCasilla(3,5) == "azul" && $tablero->devolverValorCasilla(3,4) == "rojo");
    }

    public function test_borrar_tablero()
    {
        $tablero = new Tablero(7,7);
        $fichaAzul = new Ficha("azul");
        $tablero->ponerFichaUsuario(5,$fichaAzul);
        $tablero->limpiarTablero();

        $this->assertTrue($tablero->devolverValorCasilla(5,6) == "0");
    }

    public function test_sacar_fichas()
    {
        $tablero = new Tablero(7,7);
        $fichaAzul = new Ficha("azul");
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $tablero->ponerFichaUsuario(3,$fichaAzul);
        $tablero->sacarFichaUsuario(3);
        $tablero->sacarFichaUsuario(3);
        $fichaRoja = new Ficha("rojo");
        $tablero->ponerFichaUsuario(3,$fichaRoja);
        $tablero->sacarFichaUsuario(3);
        
        $this->assertTrue($tablero->devolverValorCasilla(3,6) == "0" && $tablero->devolverValorCasilla(3,5) == "0" && $tablero->devolverValorCasilla(3,4) == "0");
    }
}
