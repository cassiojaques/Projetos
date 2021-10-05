<?php
session_start();

if(!$_SESSION['email'])
{
    header('Location: ../views/home.php');
}

?>