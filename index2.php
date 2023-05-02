<?php

include "PessoaController.php";

$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$partes_url = explode("/", $rota);

$classe = ucwords($partes_url[1]) . "Controller";
$metodo = $partes_url[2];

if(class_exists($classe))
{
    if(method_exists($classe, $metodo))
        $classe::$metodo();
    else
        echo "Método não existe.";
} else
    echo "classe não encontrada";

