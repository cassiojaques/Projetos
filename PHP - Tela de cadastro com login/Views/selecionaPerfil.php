<?php
include '../controllers/valida_login.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link href="../resources/css/bootstrap.css" type="text/css" rel="stylesheet" />

    <title>Home</title>
</head>

<body>
    <div>
        <div class="menu-lateral">
        </div>
        <div class="cabecalho ">
            <img id="capa_img" class="img" src="../resources/images/cabecalho.jpg" />
        </div>
        <div class="contexto p-5">
            <div>
              <h4>Usuário: <?php echo $_SESSION['email']?></h4><!-- Nome do usuário será relativo -->
            </div>
            </br>
            </br>
            <form class="formPerfil"  method="POST" action="../Controllers/captura_perfil.php">
                <p style="font-weight: bold;">Selecione um perfil:</p>
                <div >
                    <select name="combo" class="custom-select d-block w-100">
                        <option value="Trabalhador">Trabalhador</option>
                        <option value="Coordenador de Curso">Coordenador de Curso</option>
                        <option value="Coordenador do Núcleo Pedagógico">Coordenador do Núcleo Pedagógico</option>
                    </select>
                </div>
            
            <div>
              <button type="submit" class="btn btn-primary btn-block"  href="../inserirAjusteTrabalhador.html">Entrar</button>
            </div>
        </form>
        </div>
    </div>


</body>

</html>