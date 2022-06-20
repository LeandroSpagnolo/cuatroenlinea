<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TableConfirmationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_counting_white_squares()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($html,'bg-gray-200') == 41);
    }
    public function test_counting_red_squares()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1222345');

        $this->assertTrue(substr_count($html,'bg-red-500') == 4);
    }
    public function test_counting_blue_squares()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/12223334');

        $this->assertTrue(substr_count($html,'bg-sky-500') == 4);
    }
}
