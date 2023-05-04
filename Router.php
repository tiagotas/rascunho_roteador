<?php


class Router
{
    /*public static $rotas = [
        '/pessoa/index' => 'PessoaController::index',
        '/pessoa/form' => 'PessoaController::form'
    ];*/

    static $rotas = [];

    public static function register(array $rota)
    {
        self::$rotas[] = $rota;
    }

    public static function get($rota)
    {
        foreach(self::$rotas as $r)
        {
            if(isset($r[$rota]))
                call_user_func($r[$rota]);
        }
    }
    
    public static function navigate()
    {
        $rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        self::get($rota);
    }
}
