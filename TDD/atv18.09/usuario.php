<?php

    class usuario{
        private $name;
        private $cpf;
        private $renda;
        

        public function __construct( $name, $cpf, $renda)
        {
            $this->name = $name;
            $this->cpf = $cpf;
            $this->renda = $renda;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setRenda($renda){
            $this->renda = $renda;
        }

        public function getRenda(){
            return $this->renda;
        }

        public function cadastrarUsuario($name, $cpf, $renda)
        {   
            $this->name = $name;
            $this->cpf = $cpf;
            $this->renda = $renda;
        }

        
    }

?>