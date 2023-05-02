<?php
include "PessoaController.php";
include "Router.php";

$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

Router::register(['/pessoa' => 'PessoaController::index']);
Router::register(['/pessoa/form' => 'PessoaController::form']);


Router::get($rota);

