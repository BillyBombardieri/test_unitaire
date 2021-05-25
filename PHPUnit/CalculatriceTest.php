<?php

include 'Calculatrice.php';


use PHPUnit\Framework\TestCase;


class CalculatriceTest extends TestCase {

    public function testAdditionner() {
        $calc = new Calculatrice();
        $result = $calc->addition(15, 25);
        $this->assertEquals(40, $result);
    }

}