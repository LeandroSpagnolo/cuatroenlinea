<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class claseFichaTest extends TestCase
{
    public function test_crear_ficha_azul()
    {
        $fichaAzul = new Ficha("azul");

        $this->assertTrue($fichaAzul->queColorSoy() == "azul");
    }

    public function test_crear_ficha_roja()
    {
        $fichaRoja = new Ficha("rojo");

        $this->assertTrue($fichaRoja->queColorSoy() == "rojo");
    }
}
