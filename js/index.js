class Pessoa {
    constructor(nome,cpf,salarioAnual){
        this.nome = nome;
        this.cpf = cpf;
        this.salarioAnual = salarioAnual;


    }

}

var nome = document.querySelector('#nome')
var cpf = document.querySelector('#cpf')
var salarioAnual = document.querySelector('#salarioAnual')

console.log(nome.value)
console.log(cpf.value)
console.log(salarioAnual.value)