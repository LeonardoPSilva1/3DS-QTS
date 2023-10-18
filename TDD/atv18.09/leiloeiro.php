<?php
class Leiloeiro{
  private $idLeiloeiro;
  private $nome;
  private $cpf;

  public function __construct($idLeiloeiro ,$nome, $cpf){
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getCpf(){
    return $this->cpf;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setCpf($cpf){
    $this->cpf = $cpf;
  }

  public function cadastrarLeilao($nome, $descricao, $dataInicio, $dataFim, $valor ,$valorMinimo)
    {   
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->valor = $valor;
        $this->valorMinimo = $valorMinimo;
    }


  public function cadastrarProduto($nome, $precoMini, $descri, $codProd, $fabricante, $atualize)
    {   
        $this->nome = $nome;
        $this->precoMini = $precoMini;
        $this->descri = $descri;
        $this->codProd = $codProd;
        $this->fabricante = $fabricante;
        $this->atualize = $atualize;
    }




    

  

 




    

 
}


?>

