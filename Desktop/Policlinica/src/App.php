<?php
    namespace Policlinica;

    use Policlinica\router\Router;
    require_once __DIR__ . '/router/Router.php';
    class App{
        public static string $DIR;
        public Router $router;
        public function __construct(string $dir){
            self::$DIR = $dir;
            $this->router = new Router();
        }
        //empieza el codigo
        public function inicio(){
            $this->router->result();
        }




        
    }

    