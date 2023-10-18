<?php

    class produto{
        private $nome;
        private $precoMini;
        private $descri;
        private $codProd;
        private $fabricante;
        private $atualize;

        public function __construct($nome, $precoMini, $descri, $codProd, $fabricante, $atualize)
        {
            $this->nome = $nome;
            $this->precoMini = $precoMini;
            $this->descri = $descri;
            $this->codProd = $codProd;
            $this->fabricante = $fabricante;
            $this->atualize = $atualize;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setPrecoMini($precoMini){
            $this->precoMini = $precoMini;
        }

        public function getPrecoMini(){
            return $this->precoMini;
        }

        public function setDescri($descri){
            $this->descri = $descri;
        }

        public function getDescri(){
            return $this->descri;
        }

        public function setCodProd($codProd){
            $this->codProd = $codProd;
        }

        public function getCodProd(){
            return $this->codProd;
        }

        public function setFabricante($fabricante){
            $this->fabricante = $fabricante;
        }

        public function getFabricante(){
            return $this->fabricante;
        }

        public function setAtualize($atualize){
            $this->atualize = $atualize;
        }

        public function getAtualize(){
            return $this->atualize;
        }

        
    }

?>