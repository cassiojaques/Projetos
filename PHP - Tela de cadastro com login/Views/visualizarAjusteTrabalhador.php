<?php
include "../controllers/pesquisa.php";
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
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="inserirAjusteTrabalhador.php">Inserir</a>
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="editarAjusteTrabalhador.php">Editar </a>
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="#">Visualizar </a>
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
                                <h4>Perfil: <?php echo $_SESSION['perfil']?></h4>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box-topo p-1">
                <div>
                    <h4>Consulta</h4>
                </div>
                <form class="tab-content" method="POST" action="../views/visualizarAjusteTrabalhador.php" onsubmit="return validaPreenchimento(true);">
                    <div class="box-content p-3">
                        <table id="filtros" style="width:100%" >
                        <thead>
                            <tr>
                                <th>
                                    Data Inicio
                                <th>
                                <th>
                                    Data Final
                                <th>
                                <th>
                                    Justificativa
                                <th>
                            </tr>
                         </thead>                         
                        <tbody>
                            <tr>
                                <th>
                                     <input id="dataInicio" name="dataInicio" placeholder="DD/MM/AAAA" type="text" value=""
                                        class="form-control" oninput="formatar(this, 'data');" onfocusout="validaData(this);">
                                <th>
                                <th>
                                    <input id="dataFinal" name="dataFinal" placeholder="DD/MM/AAAA" type="text" value=""
                                        class="form-control" oninput="formatar(this, 'data');" onfocusout="validaData(this);">
                                <th>
                                <th>
                                    <select id="justificativa" name="justificativa" class="custom-select d-block w-100 form-control">
                                        <option value="Prod. Conteúdo">Prod. Conteúdo</option>
                                        <option value="Versionamento">Versionamento</option>
                                        <option value="Capacitação">Capacitação</option>
                                        <option value="Empréstimo">Empréstimo</option>
                                    </select>
                                <th>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <div style="float: right">
                        <input type="submit" value="Pesquisar" name="pesquisar" class="btn btn-primary btn-simples">
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
                                            $totalHoras = $linha['totalHoras'];
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
                                                        <input id='TotalHoras' placeholder='' type='text' value='$totalHoras' class='form-control'
                                                            disabled='disabled' disabled='disabled'> 
                                                    </td>
                                                    <td>
                                                        <input id='Justificativa' placeholder='' type='text' value='$justificativa'
                                                            class='form-control' disabled='disabled'>
                                                    </td>
                                                </tr>
                                                </tbody>";
                                        }
                                    }
                                    else
                                    {
                                        echo "<tr>
                                                <td colspan='5' style='text-align: center;'>
                                                Nenhum registro encontrado!
                                                </td>
                                            </tr>";
                                    }
                                ?>
                                
                            </table>
                    </div>

                </div>

                <div>
                    <img src="../resources/images/imprimir.png"   title="Imprimir" />
                    <img src="../resources/images/adobe.png"   title="Gerar PDF" />
                    <img src="../resources/images/excel.png"  title="Gerar Excel" />
                </div>

            </div>

            <div class="box-rodape p-1">
                <div>
                    <h4>Status</h4>
                </div>
                <div class="box-content p-1">
                    <div class="tab-content">

                        <div>
                            Enviada para o coordenador
                        </div>
                    </div>

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

