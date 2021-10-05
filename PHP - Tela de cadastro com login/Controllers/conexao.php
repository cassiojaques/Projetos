<?php

$servidor = 'localhost';
$banco = 'projetoponto';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect(
    $servidor,
    $usuario,  
    $senha,
    $banco
) or die("Erro ao conectar");

