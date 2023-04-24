<?php
require_once "php/model.php";
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$salarioAnual = $_GET['salarioAnual'];

$pessoa = new Pessoa($nome, $cpf, $salarioAnual);
$pessoa->calcularAliquota();
$pessoa->calculoParcela();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>

    <div id="form-resul">     
        <h2 class="title" id="resultado">Resultado </h2>
        

        <p class="input-group-resul flex-nowrap">Nome: <span id="nome"><?php echo $nome?></span></p> 
        <p class="input-group-resul flex-nowrap">CPF: <span id="cpf"> <?php echo $cpf?></span> </p>
        <p class="input-group-resul flex-nowrap">Rendimento: R$<?php echo $salarioAnual?></p> 
        <p class="input-group-resul flex-nowrap">Porcentagem: <?php echo $pessoa->getTaxa() ?> </p> 
        <p class="input-group-resul flex-nowrap">Parcelas: <?php echo $pessoa->getParcela() ?> </p>

        <a href="index.html"><button class="botao">Retorne</button></a>
    
        <script src="js/index.js"></script>
     </div>   
</body>
</html>