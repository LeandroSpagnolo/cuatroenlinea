<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class circleConfirmationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_blue_circle_top()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($html,'hover:bg-sky-500') == 7);
    }

    public function test_red_circle_top()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/12');

        $this->assertTrue(substr_count($html,'hover:bg-red-500') == 7);
    }
}
