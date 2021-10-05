<?php
session_start();

include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT id, email FROM USUARIOS WHERE EMAIL ='$email' AND SENHA = '$senha' LIMIT 1";

$consulta = mysqli_query($conexao,$query);

$row = mysqli_num_rows($consulta);

if($row == 1)
{
    $retorno = mysqli_fetch_assoc($consulta);
    $_SESSION['email'] = $retorno['email'];
    $_SESSION['id_usuario'] = $retorno['id'];

    header('Location: ../views/selecionaPerfil.php');
}
else
{
    $_SESSION['UsuarioOuSenhaInvalido'] = "Usuário ou Senha Inválido!";
    header('Location: ../views/home.php');
}

?>