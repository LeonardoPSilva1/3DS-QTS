<?php

namespace src;

use src\Leiloeiro;
use src\Produto;
use src\Usuario;

    class leilao{
        private $leiloeiro;
        private $produto;
        private $usuario;
        /------------------------------/
        private $nome;
        private $descricao;
        private $dataInicio;
        private $dataFim;
        private $valor;
        private $valorMinimo;
        private $lances = array();


    function __construct($leiloeiro, $produto , $usuario , $nome, $descricao, $dataInicio, $dataFim, $valor ,$valorMinimo)
    {
        $this->leiloeiro = $leiloeiro;
        $this->produto = $produto;
        $this->usuario = $usuario;

        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->valor = $valor;
        $this->valorMinimo = $valorMinimo;
    }

    public function setLeiloeiro($leiloeiro){
        $this->leiloeiro = $leiloeiro;
    }

    public function getLeiloeiro(){
        return $this->leiloeiro;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    /------------------------------------------------------------/

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDataInicio($dataInicio){
        $this->dataInicio = $dataInicio;
    }

    public function getDataInicio(){
        return $this->dataInicio;
    }

    public function setDataFim($dataFim){
        $this->dataFim = $dataFim;
    }

    public function getDataFim(){
        return $this->dataFim;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValorMinimo($valorMinimo){
        $this->valorMinimo = $valorMinimo;
    }

    public function getValorMinimo(){
        return $this->valorMinimo;
    }

    public function setLances($lances){
        $this->lances = $lances;
    }

    public function getLances(){
        return $this->lances;
    }

    function maioresLances(){
        $maioresLances = array();
        $lances = $this->getLances();
        $maior = 0;
        $segundoMaior = 0;
        $terceiroMaior = 0;
        foreach ($lances as $lance) {
            if($lance->getValor() > $maior){
                $terceiroMaior = $segundoMaior;
                $segundoMaior = $maior;
                $maior = $lance->getValor();
            }else if($lance->getValor() > $segundoMaior){
                $terceiroMaior = $segundoMaior;
                $segundoMaior = $lance->getValor();
            }else if($lance->getValor() > $terceiroMaior){
                $terceiroMaior = $lance->getValor();
            }
        }
        array_push($maioresLances, $maior);
        array_push($maioresLances, $segundoMaior);
        array_push($maioresLances, $terceiroMaior);
        return $maioresLances;
    }

    /------------------------------------------------------------/
    
    function mediaLances(){
        $lances = $this->getLances();
        $soma = 0;
        foreach ($lances as $lance) {
            $soma += $lance->getValor();
        }
        return $soma/count($lances);
    }

    

}
    

?>