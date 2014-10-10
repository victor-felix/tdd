<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vox\Treinamento\Tdd\Tests;

/**
 * Description of CalculadoraTest
 *
 * @author vitor
 */
class CalculadoraTest extends AbstractCalculadoraTestCase
{

    public function setUp()
    {
        
    }

    public function testEntradaCorreta()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->somar(1, 1), 2);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExcessao()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->somar("huehuebr", 2), 5);
    }

    public function testSoma()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->somar(40, 50), 90);
    }
    
    public function testDivisao()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->dividir(10, 2), 5);
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDivisaoExcessao()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->somar("huehuebr", 2), 5);
    }    
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDivisaoPorZero()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->dividir(10, 0), 0);
    }
    
    public function testSubtracao()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->subtrair(10, 5), 5);        
    }
    
    public function testMultiplicacao()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->multiplicar(2, 5), 10);        
    }    
    
    public function testRaizQuadrada()
    {
        $calc = new \Vox\Treinamento\Tdd\Calculadora();
        $this->assertEquals($calc->raizQuadrada(25), 5);
    }
    

}
