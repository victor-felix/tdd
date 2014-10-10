<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Vox\Treinamento\Tdd;
/**
 * Description of Calculadora
 *
 * @author vitor
 */
class Calculadora
{
    public function somar($primeiroTermo, $segundoTermo)
    {
        if(!is_numeric($primeiroTermo) || !is_numeric($segundoTermo)){
            throw new \InvalidArgumentException("Argumentos invalidos.");
        }
        return $primeiroTermo + $segundoTermo;
    }
    
    public function dividir($primeiroTermo, $segundoTermo)
    {
        if(!is_numeric($primeiroTermo) || !is_numeric($segundoTermo)){
            throw new \InvalidArgumentException("Deu erro porra.");
        }
        
        if($segundoTermo == 0){
        throw new \InvalidArgumentException("Deu erro porra.");
        }
        
        return $primeiroTermo / $segundoTermo;
    }
    
    public function subtrair($primeiroTermo, $segundoTermo)
    {
        if(!is_numeric($primeiroTermo) || !is_numeric($segundoTermo)){
            throw new \InvalidArgumentException("Deu erro porra.");
        }
        return $primeiroTermo - $segundoTermo;
    } 
    
    public function multiplicar($primeiroTermo, $segundoTermo)
    {
        if(!is_numeric($primeiroTermo) || !is_numeric($segundoTermo)){
            throw new \InvalidArgumentException("Deu erro porra.");
        }
        return $primeiroTermo * $segundoTermo;
    }     
    
    public function raizQuadrada($termo)
    {
        if(!is_numeric($termo)){
            throw new \InvalidArgumentException("Deu erro porra.");
        }
        return sqrt($termo);
    }
}
