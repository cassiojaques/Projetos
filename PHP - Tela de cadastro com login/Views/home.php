<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link href="../resources/css/bootstrap.css" type="text/css" rel="stylesheet" />

    <!-- JS -->
    <script type="text/javascript" src="../resources/Validacoes.js"></script>

    <title>Home</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['UsuarioOuSenhaInvalido']))
    {
        $invalido = $_SESSION['UsuarioOuSenhaInvalido'];
        session_destroy();
        echo "<div class='alert alert-danger' style='text-align: center;'>
                    $invalido
            </div>";
    }
    ?>
    <div class="fullscreen">
        <video loop="" muted="" autoplay="" class="fullscreen-video">
            <source src="../resources/images/video/Office-Day.webm" type="video/webm">
            <source src="../resources/images/video/Office-Day.mp4" type="video/mp4">
        </video>
    </div>
    <form class="formLogin"  method="POST" action="../Controllers/login.php" onsubmit="return validaPreenchimento();">
        <h1 class="">Ponto Certo!</h1>
        <br>
        <input name="email" placeholder="E-mail" type="text" value="" class="form-control">
        <input name="senha" placeholder="Senha" type="password" class="form-control">
        <br>
        <div class="links">
            <a href="#" id="btnEsqueciMinhaSenha"><span>Esqueci minha senha</span></a>
            </br>
            <a href="#" id="btnCriarConta"><span>Ainda não tenho cadastro</span></a>
        </div>

        <div>
            <button type="submit" class="btn btn-lg btn-primary btn-block" >Logar</a>
        </div>
    </form>
</body>

</html>