<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$salarioAnual = $_POST['salario'];

Header("Location: ../resultado.php?nome=$nome&cpf=$cpf&salarioAnual=$salarioAnual")
?>

