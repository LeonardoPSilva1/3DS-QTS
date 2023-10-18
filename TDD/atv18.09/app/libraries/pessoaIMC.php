<?php
    namespace app\libraries;

    class pessoaIMC
    {
        private $nome;
        private $idade;
        private $altura;
        private $peso;
        private $IMC;
        private $categoria;

        public function __construct($nome, $idade, $altura, $peso)
        {
            $this->nome = $nome;
            $this->idade = $idade;
       
            $this->altura = $altura;
            $this->peso = $peso;
            $this->calcularIMC();
            $this->calcularCategoria();
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getPeso()
        {
            return $this->peso;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;
            $this->calcularIMC();
            $this->calcularCategoria();
        }

        public function getAltura()
        {
            return $this->altura;
        }

        public function setAltura($altura)
        {
            $this->altura = $altura;
            $this->calcularIMC();
            $this->calcularCategoria();
        }

        public function getIMC()
        {
            return $this->IMC;
        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        private function calcularIMC()
        {
            $this->IMC = round($this->peso / ($this->altura * $this->altura), 2);
        }

        private function calcularCategoria()
        {
            if ($this->IMC < 18.5) {
                $this->categoria = "Abaixo do Peso";
            } elseif ($this->IMC < 25) {
                $this->categoria = "Normal";
            } elseif ($this->IMC < 30) {
                $this->categoria = "Sobrepeso";
            } elseif ($this->IMC < 35) {
                $this->categoria = "Obesidade Grau I";
            } elseif ($this->IMC < 40) {
                $this->categoria = "Obesidade Grau II";
            } else {
                $this->categoria = "Obesidade Grau III";
            }
        }
    }
?>