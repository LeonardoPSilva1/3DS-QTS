<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $salarioAnual;
    private $taxa;
    private $parcela;

    function __controler($nome, $cpf, $salarioAnual){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioAnual = $salarioAnual;
    }

    public function setNome($nome){
        $this->setNome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCpf($cpf){
        $this->setCpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setSalarioAnual($salarioAnual){
        $this->setSalarioAnual = salarioAnual;
    }

    public function getSalarioAnual(){
        return $this->salarioAnual;
    }
    public function setTaxa($taxa){
        $this->setTaxa = taxa;
    }

    public function getTaxa(){
        return $this->taxa; 
    }

    public function setParcela($parcela){
        $this->setParcela = parcela;
    }

    public function getParcela(){
        return $this->parcela;
    }

    function calcularAliquota(){
        if($this->getSalarioAnual() <= 22847.46){
            return $this->taxa = 0;
        }elseif($this->getSalarioAnual() >= 22847.46 && $this->getSalarioAnual() <= 33918.80){
            return $this->taxa = 7.5;
        }elseif($this->getSalarioAnual() >=33918.80 && $this->getSalarioAnual() <= 45012.60){
            return $this->taxa = 15;
        }elseif($this->getSalarioAnual() >=45012.60 && $this->getSalarioAnual() <= 55976.16){
            return $this->taxa = 22.5;
        }elseif($this->getSalarioAnual() > 55976.16){
            $this->taxa = 27.5;
        }
    }

    function calculoParcela(){
        $this->parcela = $this->getSalarioAnual()*($this->getTaxa()/100);
        $this->parcela = "R$".number_format($this->parcela, 2, '.', '');

}

}

?>|


