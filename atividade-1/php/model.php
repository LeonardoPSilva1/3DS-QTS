<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $salarioAnual;
    private $taxa;
    private $parcela;

    function controler($nome, $cpf, $salarioAnual){
        $this.nome = $nome
        $this.cpf = $cpf
        $this.salarioAnual = $salarioAnual
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

    public function getCpf($cpf){
        return $this->cpf;
    }

    public function setSalarioAnual($salarioAnual){
        $this->setSalarioAnual = salarioAnual;
    }

    public function getSalarioAnual($salarioAnual){
        return $this->SalarioAnual;
    }
    public function setTaxa($taxa){
        $this->setTaxa = taxa;
    }

    public function getTaxa($taxa){
        return $this->Taxa; 
    }

    public function setParcela($parcela){
        $this->setParcela = parcela;
    }

    public function getParcela($parcela){
        return $this->parcela;
    }

    function calcularAliquota($salarioAnual, $taxa){
        if($this.getSalarioAnual <= 22847.46){
            return $this.Taxa = 0;
        }elseif($this.getSalarioAnual >= 22847.46 && getSalarioAnual <= 33918.80){
            return $this.getTaxa = 7.5;
        }elseif($this.getSalarioAnual >=33918.80 && getSalarioAnual <= 45012.60){
            return $this.getTaxa = 15;
        }elseif($this.getSalarioAnual >=45012.60 && getSalarioAnual <= 55976.16){
            return $this.getTaxa = 22.5;
        }elseif($this.getSalarioAnual > 55976.16){
            $this.getTaxa = 27.5;
        }
    }

    function calculoParcela($parcela, $salarioAnual){
        $this.getParcela = $this.getSalarioAnual*($this.getTaxa/100);
        $this.getParcela = $this.getParcela.toFixed(2);

}

}

?>|


