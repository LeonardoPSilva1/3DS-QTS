class Pessoa {
    constructor(nome,cpf,salarioAnual){
        this.nome = nome;
        this.cpf = cpf;
        this.salarioAnual = salarioAnual;


    }

}
const urlParams = new URLSearchParams(window.location.search);

var nome = urlParams.get("#nome") 
var cpf = urlParams.get("#cpf") 
var salarioAnual = urlParams.get("#salario") 

console.log(nome)


console.log(nome.value)
console.log(cpf.value)
console.log(salarioAnual.value)
