<?php
 include "../controllers/insere_dados.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link href="../resources/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/icons">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    
    <!-- JS -->
    <script type="text/javascript" src="../resources/Validacoes.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <title>Home</title>
</head>
<body>
    <div>
        <div class="cabecalho ">
            <img id="capa_img" class="img" src="../resources/images/cabecalho.jpg" />
        </div>
        <div class="menu-lateral">
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="#">Inserir </a>
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="editarAjusteTrabalhador.php">Editar </a>
            <a class="btn btn-primary btn-block btn-simples" id="logar"
                href="visualizarAjusteTrabalhador.php">Visualizar </a>
        </div>
        <div class="contexto p-4">
            <div class="p-1">
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <th>
                                <h4>Usuário: <?php echo $_SESSION['email']?></h4>
                            </th>
                            <th style="float: right;">
                                <h4>Perfil: Trabalhador</h4>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box-topo p-1">
                <div>
                    <h4>Insere Hora</h4>
                </div>
                <form class="tab-content" method="POST" action="../views/inserirAjusteTrabalhador.php" onsubmit="return validaPreenchimento();">
                    <div class="box-content p-3">
                        <table style="width:100%">
                            <tr>
                                <th>
                                    Data
                                </th>
                                <th>
                                    Hora Entrada
                                </th>
                                <th>
                                    Hora Saída
                                </th>
                                <th>
                                    Justificativa
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <input id="data" name="data" placeholder="DD/MM/AAAA" type="text" value=""
                                        class="form-control" oninput="formatar(this, 'data');" onfocusout="validaData(this);">
                                </td>
                                <td>
                                    <input id="horaEntrada" name="horaEntrada" placeholder="HH:MM" type="text" value=""
                                        class="form-control" oninput="formatar(this, 'hora');" onfocusout="validaHoraMinuto(this);">
                                </td>
                                <td>
                                    <input id="horaSaida" name="horaSaida" placeholder="HH:MM" type="text" value=""
                                        class="form-control" oninput="formatar(this, 'hora');" onfocusout="validaHoraMinuto(this);">
                                </td>
                                <td>
                                    <select id="justificativa" name="justificativa"  class="form-control">
                                        <option value="Prod. Conteúdo">Prod. Conteúdo</option>
                                        <option value="Versionamento">Versionamento</option>
                                        <option value="Capacitação">Capacitação</option>
                                        <option value="Empréstimo">Empréstimo</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right">
                        <input type="submit" value="Inserir" name="inserir" class="btn btn-primary  btn-simples" >
                    </div>
                </form>
            </div>

            <div class="box-meio p-1">
                <div>
                    <div>
                        <h4>Lista de Horas</h4>
                    </div>
                </div>
                <div class="box-content p-3">
                    <div class="tab-content">

                    <table id="listaFiltrada" style="width:100%" class="display compact ">
                            <thead>   
                                <tr>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Hora Entrada
                                    </th>
                                    <th>
                                        Hora Saída
                                    </th>
                                    <th>
                                        Total Horas
                                    </th>
                                    <th>
                                        Justificativa
                                    </th>
                                    <th>
                                        Ações
                                    </th>
                                </tr>
                            </thead>   
                                <?php   
                                    if ($row > 0) 
                                    {                                            
                                        while ($linha = mysqli_fetch_assoc($consulta))
                                        {
                                            $data = $linha['data'];
                                            $horaEntrada = $linha['horaEntrada'];
                                            $horaSaida = $linha['horaSaida'];
                                            $justificativa = $linha['justificativa'];
                                            
                                            echo "<tbody>
                                                <tr>
                                                    <td>
                                                        <input id='data-editar' placeholder='DD/MM/AAAA' type='text' value='$data'
                                                            class='form-control' disabled='disabled'>
                                                    </td>
                                                    <td>
                                                        <input id='HoraEntrada-editar' placeholder='HH:MM' type='text' value='$horaEntrada'
                                                            class='form-control' disabled='disabled'>
                                                    </td>
                                                    <td>
                                                        <input id='HoraSaida-editar' placeholder='HH:MM' type=text value='$horaSaida'
                                                            class='form-control' disabled='disabled'> 
                                                    </td>
                                                    <td>
                                                        <input id='TotalHoras' placeholder='' type='text' value='' class='form-control'
                                                            disabled='disabled' disabled='disabled'> 
                                                    </td>
                                                    <td>
                                                        <input id='Justificativa' placeholder='' type='text' value='$justificativa'
                                                            class='form-control' disabled='disabled'>
                                                    </td>
                                                    <td class='th-acao'>
                                                        <img src='../resources/icons/settings.svg' alt='' width='25px' title='Editar' />
                                                        <img src='../esources/icons/trash.svg' alt='' width='25px' title='Excluir' />
                                                    </td>
                                                </tr>
                                                </tbody>";
                                        }
                                    }
                                    else
                                    {
                                        echo "<tr>
                                                <td colspan='6' style='text-align: center;'>
                                                Insira novos registros!
                                                </td>
                                            </tr>";
                                    }
                                ?>
                                
                            </table>
                                    <th class="th-acao">
                                        <img src="../resources/icons/settings.svg" alt="" width="25px" title="Editar" />
                                        <img src="../resources/icons/trash.svg" alt="" width="25px" title="Excluir" />
                                    </th>
                                </tr>
                            </table>
                        </div>

                    </div>

                </div>
                <div style="float: right">
                    <a href="#" class="btn btn-primary  btn-simples" id="btnSalvarConfigGeral">Voltar</a>
                    <a href="#" class="btn btn-primary  btn-simples" id="btnSalvarConfigGeral">Enviar para Análise</a>
                </div>
            </div>

        </div>
    </div>


</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#listaFiltrada').DataTable(
        {
            scrollY: true,
            scrollY: 150,
            searching: false,
            paging: false,
            bInfo: false,
            order: false
        });
} );
</script>
</html>