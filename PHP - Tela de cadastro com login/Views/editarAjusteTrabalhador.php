<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link href="../resources/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/icons">
    
    <!-- JS -->
    <script type="text/javascript" src="../resources/Validacoes.js"></script>

    <title>Home</title>
</head>

<body>
    <div>
        <div class="cabecalho">
            <img id="capa_img" class="img" src="../resources/images/cabecalho.jpg" />
        </div>
        <div class="menu-lateral">
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="inserirAjusteTrabalhador.php">Inserir
            </a>
            <a class="btn btn-primary btn-block btn-simples" id="logar" href="#">Editar </a>
            <a class="btn btn-primary btn-block btn-simples" id="logar"
                href="visualizarAjusteTrabalhador.php">Visualizar </a>
        </div>
        <div class="contexto p-4">
            <div class="p-1">
                <div>
                    <table style="width: 100%;">
                        <tr>
                            <th>
                                <h4>Usuário: Cássio Vargas</h4>
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
                    <h4>Consulta</h4>
                </div>
                <div class="box-content p-3">
                    <div class="tab-content">

                        <div>
                            <table style="width:100%">
                                <tr>
                                    <th>
                                        Data Entrada
                                    <th>
                                    <th>
                                        Data Saída
                                    <th>
                                    <th>
                                        Justificativa
                                    <th>
                                </tr>
                                <tr>
                                    <th>
                                        <input id="dataInicio" placeholder="DD/MM/AAAA" type="text" value=""
                                            class="form-control" oninput="formatar(this, 'data');" onfocusout="validaData(this);">
                                    <th>
                                    <th>
                                        <input id="dataFinal" placeholder="DD/MM/AAAA" type="text" value=""
                                            class="form-control" oninput="formatar(this, 'data');" onfocusout="validaData(this);">
                                    <th>
                                    <th>
                                        <div id="justificativa" class="form-control">
                                            <select id="">
                                                <option value="Prod. Conteúdo">Prod. Conteúdo</option>
                                                <option value="Versionamento">Versionamento</option>
                                                <option value="Capacitação">Capacitação</option>
                                                <option value="Empréstimo">Empréstimo</option>
                                            </select>
                                        </div>
                                    <th>
                                </tr>
                            </table>

                        </div>
                    </div>

                </div>
                <div style="float: right">
                    <a href="#" class="btn btn-primary  btn-simples" id="btnInserir" onclick="validaPreenchimento(true);">Consultar</a>

                </div>
            </div>

            <div class="box-meio p-1">
                <div>
                    <div>
                        <h4>Lista de Horas</h4>
                    </div>
                </div>
                <div class="box-content p-3">
                    <div class="tab-content">

                        <div>
                            <table style="width:100%">
                                <tr>
                                    <th>
                                        Data
                                    <th>
                                    <th>
                                        Hora Entrada
                                    <th>
                                    <th>
                                        Hora Saída
                                    <th>
                                    <th>
                                        Total Horas
                                    <th>
                                    <th>
                                        Justificativa
                                    <th>
                                    <th>
                                        Ações
                                    <th>
                                </tr>
                                <tr>
                                    <th>
                                        <input id="data-editar" placeholder="DD/MM/AAAA" type="text" value=""
                                            class="form-control" oninput="formatar(this, 'data');" onfocusout="validaData(this);">
                                    <th>
                                    <th>
                                        <input id="HoraEntrada-editar" placeholder="HH:MM" type="text" value=""
                                            class="form-control" oninput="formatar(this, 'hora');" onfocusout="validaHoraMinuto(this);">
                                    <th>
                                    <th>
                                        <input id="HoraSaida-editar" placeholder="HH:MM" type="text" value=""
                                            class="form-control" oninput="formatar(this, 'hora');" onfocusout="validaHoraMinuto(this);">
                                    <th>
                                    <th>
                                        <input id="TotalHoras" placeholder="" type="text" value="" class="form-control"
                                            disabled='disabled'>
                                    <th>
                                    <th>
                                        <div id="" class="form-control">
                                            <select id="">
                                                <option value="Prod. Conteúdo">Prod. Conteúdo</option>
                                                <option value="Versionamento">Versionamento</option>
                                                <option value="Capacitação">Capacitação</option>
                                                <option value="Empréstimo">Empréstimo</option>
                                            </select>
                                        </div>
                                    <th>
                                    <th class="th-acao">
                                        <img src="resources/icons/settings.svg" alt="" width="25px" title="Editar" />
                                        <img src="resources/icons/trash.svg" alt="" width="25px" title="Excluir" />
                                    <th>
                                </tr>
                                <tr>
                                    <th>
                                        <input id="data-editar" placeholder="DD/MM/AAAA" type="text" value=""
                                            class="form-control" disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="HoraEntrada-editar" placeholder="HH:MM" type="text" value=""
                                            class="form-control" disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="HoraSaida-editar" placeholder="HH:MM" type="text" value=""
                                            class="form-control" disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="TotalHoras" placeholder="" type="text" value="" class="form-control"
                                            disabled='disabled' disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="Justificativa" placeholder="" type="text" value="Capacitação" class="form-control"
                                            disabled='disabled' disabled='disabled'>
                                    <th>
                                    <th class="th-acao">
                                        <img src="resources/icons/settings.svg" alt="" width="25px" title="Editar" />
                                        <img src="resources/icons/trash.svg" alt="" width="25px" title="Excluir" />
                                    <th>
                                </tr>
                                <tr>
                                    <th>
                                        <input id="data-editar" placeholder="DD/MM/AAAA" type="text" value=""
                                            class="form-control" disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="HoraEntrada-editar" placeholder="HH:MM" type="text" value=""
                                            class="form-control" disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="HoraSaida-editar" placeholder="HH:MM" type="text" value=""
                                            class="form-control" disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="TotalHoras" placeholder="" type="text" value="" class="form-control"
                                            disabled='disabled'>
                                    <th>
                                    <th>
                                        <input id="Justificativa" placeholder="" type="text" value="Capacitação" class="form-control"
                                            disabled='disabled' disabled='disabled'>
                                    <th>
                                    <th class="th-acao">
                                        <img src="resources/icons/settings.svg" alt="" width="25px" title="Editar" />
                                        <img src="resources/icons/trash.svg" alt="" width="25px" title="Excluir" />
                                    <th>
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

</html>