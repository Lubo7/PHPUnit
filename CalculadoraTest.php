<?php

use PHPUnit\Framework\TestCase;

require_once('Calculadora.php');

final class CalculadoraTest extends TestCase 
{ 
    public function testSuma(){

        $calc = new Calculadora(); 
        $this->assertSame(8, $calc->suma(4,4));

    }
    
    public function testSuma2(){

        $calc = new Calculadora(); 
        $this->assertSame(7, $calc->suma(3,4));

    }
}

?>

