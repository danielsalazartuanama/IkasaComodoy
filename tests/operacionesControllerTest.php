<?php

use App\Controllers\operacionesController;
use PHPUnit\Framework\TestCase;

class  operacionesControllerTest extends TestCase
{
    public function test_suma_de_dos_numeros()
    {
        $obj=new operacionesController();
        $expected=11;
        $actual=$obj->suma(5,6);
        $this->assertEquals($expected,$actual);
    }
}
