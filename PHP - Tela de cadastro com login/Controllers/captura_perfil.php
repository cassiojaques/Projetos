<?php
include "valida_login.php";

$_SESSION['perfil'] = $_POST['combo'];

if (isset($_SESSION['perfil'])) {
    header('Location: ../views/visualizarAjusteTrabalhador.php');
}
else {
    header('Location: ../views/selecionaPerfil.php');
}

?>