<?php
    include "../controllers/valida_login.php";
    include '../controllers/conexao.php';
    include '../controllers/ajusta_data.php';

    $row = 0;

    //Verifica se clicou no botão de Inserir
    if (isset($_POST['inserir'])) 
    {
        $data= isset($_POST['data']) ? $_POST['data'] : '';
        $data = ajustaData($data);
        $idUsuario = $_SESSION['id_usuario'] ?? '';
        $horaEntrada = $_POST['horaEntrada'] ?? '';
        $horaSaida = $_POST['horaSaida'] ?? '';
        $justificativa = $_POST['justificativa'] ?? '';
        
        $query = "INSERT INTO REGISTRO_PONTO (`id_usuario`, `data`, `horaEntrada`, `horaSaida`, `justificativa`) 
                VALUES ($idUsuario, '$data', '$horaEntrada', '$horaSaida', '$justificativa')";


        if (mysqli_query($conexao,$query)) 
        {
            //Verifica se é a primeira vez que está inserindo ao acessar a tela, para mostar apenas os valores que forem inseridos naquele momento.
            if ( $_SESSION['primeiraInsersao'] && isset($_POST['inserir'])) {
                $_SESSION['primeiraInsersao'] = false;
                $_SESSION['idPrimeiraLinhaInseriada'] = mysqli_insert_id($conexao);
            }
            
            $id = $_SESSION['idPrimeiraLinhaInseriada'];

            $query = "SELECT id, DATE_FORMAT(data,'%d/%m/%Y') as data, horaEntrada, horaSaida, justificativa FROM REGISTRO_PONTO WHERE id >= $id";
            $consulta = mysqli_query($conexao,$query);

            $row = 1;
        }

    }
    else 
    {
        $_SESSION['primeiraInsersao'] = true;
        $_SESSION['idPrimeiraLinhaInseriada'] = 0;
    }   

?>

