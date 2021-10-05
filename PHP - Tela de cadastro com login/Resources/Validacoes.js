
function formatar(valor, tipo) {

    var v = valor.value;

    var er = /[^0-9./:]/;
    er.lastIndex = 0;
    if (er.test(valor.value)) {
        valor.value = "";
    }

    if (tipo == "data") {
        valor.setAttribute("maxlength", "10");
        if (v.length == 2 || v.length == 5) valor.value += "/";
    }

    if (tipo == "hora") {
        valor.setAttribute("maxlength", "5");
        if (v.length == 2) valor.value += ":";
    }
}

function validaData(campo) {

    if (campo.value != "") {
        var arrayData = campo.value.split("/");

        var valido = true;
        if (campo.value.length != 10)
            valido = false;
        else {
            var diaMesAno = 31;
            arrayData.some(function (item) {

                if (diaMesAno == 31) //DIA
                {
                    if (item > diaMesAno) {
                        valido = false;
                        return true;

                    }
                    diaMesAno = 12;
                }
                else if (diaMesAno == 12) //MES
                {
                    if (item > diaMesAno) {
                        valido = false;
                        return true;

                    }
                    diaMesAno = 0;
                }
                else //ANO
                {
                    if (item.length != 4) {
                        valido = false;
                        return true;
                    }
                }
            });
        }

        if (!valido) {
            alert("Data inválida!");
            campo.value = "";
        }
    }

}

function validaHoraMinuto(campo) {
    if (campo.value != "") {
        var arrayHora = campo.value.split(":");

        var valido = true;
        if (campo.value.length != 5)
            valido = false;
        else {
            var horaMinuto = 23;
            arrayHora.some(function (item) {

                if (horaMinuto == 23) //HORA
                {
                    if (item > horaMinuto) {
                        valido = false;
                        return true;
                    }
                    horaMinuto = 59;
                }
                else if (horaMinuto == 59) //MINUTO
                {
                    if (item > horaMinuto) {
                        valido = false;
                        return true;
                    }
                }
            });
        }

        if (!valido) {
            alert("Hora inválida!");
            campo.value = "";
        }
    }
}

function validaPreenchimento(isfiltro) {

    var pagina = window.location.href;

    if (pagina.indexOf("home") != -1) {

        var form = document.querySelector(".formLogin");
        var email = form.email.value;
        var senha = form.senha.value;

        if (email == "" || senha == "") {
            alert("Os campos Email e Senha são de preenchimento obrigatório!");
            form.login.focus();
            return false;
        }
        else if (email.indexOf("@") == -1) {
            alert("O campo Email precisa ter um Email válido!");
            return false;
        }
        else {
            //window.location.href = "visualizarAjusteTrabalhador.html";
        }
    }
    else if (pagina.indexOf("editarAjusteTrabalhador") != -1) {


    }
    else if (pagina.indexOf("inserirAjusteTrabalhador") != -1) {
        var data = document.querySelector("#data").value;
        var horaInicio = document.querySelector("#horaEntrada").value;
        var horaFim = document.querySelector("#horaSaida").value;

        if (data == "" || horaInicio == "" || horaFim == "")
        {
            alert("Os campos Data, Hora Entrada e Hora Saída são de preenchimento obrigatório!");
            return false;
        }
        else {
            horaMinutoEntrada = horaInicio.split(":");
            horaMinutoSaida = horaFim.split(":");

            if (horaMinutoEntrada[0] > horaMinutoSaida[0])
            {
                alert("A Hora Entrada deve ser menor que a Hora Saída!");
                return false;
            }

            if (data > dataNow)
            {
                alert("A Data deve se menor que a Data Fim!");
                return false;
            }
        }

    }

    if (isfiltro) {
        var dataInicio = document.querySelector("#dataInicio").value;
        var dataFim = document.querySelector("#dataFinal").value;

        if (dataInicio == "" || dataFim == "")
        {
            alert("Os campos Data Inicio e Data Fim são de preenchimento obrigatório!");
            return false;
        }
        else 
        {
            var dateI = Date.parse(dataInicio);
            var dareF = Date.parse(dataFim);


            if (dateI > dareF)
            {
                alert("A Data Inicio deve se menor que a Data Fim!");
                return false;
            }
        }

    }
}