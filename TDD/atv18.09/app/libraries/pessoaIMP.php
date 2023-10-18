<?php
namespace app\libraries;

class  PessoaIMP{
    private $nome;
    private $salarioAnual;
    private $taxa;
    private $parcela;



public function __construct($nome, $salarioAnual,  $parcela){
    $this->nome = $nome;
    $this->salarioAnual = $salarioAnual;
    $this->calcularTaxa();
    $this->parcela = $parcela;
}

public function getNome(){
    return $this->nome;
}       

public function getSalarioAnual(){
    return $this->salarioAnual;
}


public function getParcela(){
    return $this->parcela;
}

public function setNome($nome){
    $this->nome = $nome;
}

public function setSalarioAnual($salarioAnual){
    $this->salarioAnual = $salarioAnual;
}


public function setParcela($parcela){
    $this->parcela = $parcela;

}

function calcularTaxa(){
    $imposto = ($this->salarioAnual * $this->taxa) - $this->parcela;
    return $imposto;

}



}