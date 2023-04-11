<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $salarioAnual;
    private $taxa;
    private $parcela;

    function __construct($nome, $cpf, $salarioAnual){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioAnual = $salarioAnual;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setSalarioAnual($salarioAnual){
        $this->salarioAnual = $salarioAnual;
    }

    public function getSalarioAnual(){
        return $this->salarioAnual;
    }
    public function setTaxa($taxa){
        $this->taxa = $taxa;
    }

    public function getTaxa(){
        return $this->taxa; 
    }

    public function setParcela($parcela){
        $this->parcela = $parcela;
    }

    public function getParcela(){
        return $this->parcela;
    }

    function calcularAliquota(){
        if($this->salarioAnual <= 22847.46){
             $this->taxa = 0;
        }elseif($this->salarioAnual >= 22847.46 && $this->salarioAnual <= 33918.80){
             $this->taxa = 7.5;
        }elseif($this->salarioAnual >=33918.80 && $this->salarioAnual <= 45012.60){
             $this->taxa = 15;
        }elseif($this->salarioAnual >=45012.60 && $this->salarioAnual <= 55976.16){
             $this->taxa = 22.5;
        }elseif($this->salarioAnual > 55976.16){
            $this->taxa = 27.5;
        }
    }

    function calculoParcela(){
        $this->parcela = $this->salarioAnual * ($this->taxa /100);
        $this->parcela = "R$".number_format($this->parcela, 2, '.', '');

}

}

?>|


