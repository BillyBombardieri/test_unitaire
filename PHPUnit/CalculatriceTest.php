<?php

include 'Calculatrice.php';


use PHPUnit\Framework\TestCase;


class CalculatriceTest extends TestCase {

    public function testAdditionner() {
        $this->assertEquals(40, Calculatrice::addition(30,10));
    }

    public function testSoustraction() {
        $this->assertEquals(20, Calculatrice::soustraction(30,10));
    }

    public function testMultiplication() {
        $this->assertEquals(300, Calculatrice::multi(30,10));
    }

    public function testDivision() {
        $this->assertEquals(3, Calculatrice::divi(30,10));
    }

}