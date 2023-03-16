class Pessoa {
    constructor(nome,cpf,salarioAnual){
        this.nome = nome;
        this.cpf = cpf;
        this.salarioAnual = salarioAnual;
        this.taxa = 0;
        this.parcela = 0;
    }

    calcularAliquota(){
        if(this.salarioAnual <= 22847.46){
            this.taxa = 0;
            
        }else if(this.salarioAnual >= 22847.46 && salarioAnual <= 33919.80){
            this.taxa = 7.5
        }else if(this.salarioAnual >= 33919.80 && salarioAnual <= 45012.60){
            this.taxa = 15
        }else if(this.salarioAnual >= 45012.60 && salarioAnual <= 55976.16){
            this.taxa = 22.5
        }else if(this.salarioAnual > 55976.16){
            this.taxa = 27.5
        }
    }

    calculoParcela(){
        this.parcela = this.salarioAnual*(this.taxa/100);
        this.parcela = this.parcela.toFixed(2);
    }

}
const urlParams = new URLSearchParams(window.location.search);

var nome = urlParams.get("nome"); 
var cpf = urlParams.get("cpf"); 
var salarioAnual = urlParams.get("salario");

var pessoa = new Pessoa(nome,cpf,salarioAnual);

pessoa.calcularAliquota();
pessoa.calculoParcela();
console.log(pessoa);

document.getElementById('resultado').innerHTML = 'banana';

