<?php
    include "../controllers/valida_login.php";
    include '../controllers/conexao.php';
    include '../controllers/ajusta_data.php';

    $row = 0;

    //Verifica se clicou no botão de Pesquisar
    if (isset($_POST['pesquisar'])) 
    {
        $dataInicio = isset($_POST['dataInicio']) ? $_POST['dataInicio']: '';
        $dataFinal = isset($_POST['dataFinal']) ? $_POST['dataFinal'] : '';

        $dataInicio = ajustaData($dataInicio);
        $dataFinal = ajustaData($dataFinal);
        $justificativa = $_POST['justificativa'] ?? '';
        $idUsuario = $_SESSION['id_usuario'] ?? '';

        $query = "SELECT DATE_FORMAT(data,'%d/%m/%Y') as data, horaEntrada, horaSaida, TIMEDIFF(horaSaida, horaEntrada) as totalHoras ,justificativa FROM REGISTRO_PONTO 
                    WHERE ID_USUARIO = '$idUsuario' AND
                        DATA >= '$dataInicio' AND
                        DATA <= '$dataFinal' AND
                        JUSTIFICATIVA = '$justificativa' ";

        $consulta = mysqli_query($conexao,$query);
        $row = mysqli_num_rows($consulta);

    }

?>

