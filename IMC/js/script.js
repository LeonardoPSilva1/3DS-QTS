const nome = document.getElementById('nome');
const idade = document.getElementById('idade');
var altura = document.querySelector('#altura');
var peso = document.querySelector('#peso');


const resultado = document.getElementById('resultado');
const nomeR = document.getElementById('nomeR');
const idadeR = document.getElementById('idadeR');

function calcIMC(){
    if(altura.value !== '' && peso.value !== ''){
        let imc = (peso.value /  (altura.value * altura.value)).toFixed(2);
        let classification = '';
        
        if(imc < 18.5 && imc < 23.5){
            classification = 'Abaixo do peso!'
        }else if(imc < 20 && imc < 29.5){
            classification = 'Peso Normal'
        }else if(imc < 30 && imc < 34.5){
            classification = 'Acima do Peso'
        }else if(imc < 35 && imc < 39){
            classification = 'Obesidade Grau 1'
        }else if(imc < 41 && 43){
            classification = 'Obesidade Grau 2'
        }else {
            classification = 'Obesidade Grau 3'
        }

        nomeR.innerHTML = `Nome: ${nome.value}`
        idadeR.innerHTML = `Idade: ${idade.value}`

        resultado.innerHTML = `IMC: ${imc} (${classification})`
    }else{
        resultado.innerHTML = 'Preencha os Campos'
    }
}

    




        


