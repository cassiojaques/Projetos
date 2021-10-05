<?php

    //Retorna uma data no padrão que o Banco aceita
    function ajustaData(string $data)
    {
        if ($data <> '')
        {
            $data = str_replace("/", "-", $data);
            $data = strtotime($data);
            $data = date("Y-m-d", $data);
        }

        return $data;
    }
?>