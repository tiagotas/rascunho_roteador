<?php
include "PessoaController.php";
include "Router.php";

Router::register(['/pessoa' => 'PessoaController::index']);
Router::register(['/pessoa/form' => 'PessoaController::form']);

Router::navigate();

