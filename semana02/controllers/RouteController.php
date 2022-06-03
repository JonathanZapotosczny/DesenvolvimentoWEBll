<?php

    include_once '../global.php';

    class RouteController {

        public static function index() {
            echo "<script>window.location='views/viewMain.php'</script>";
        }

        public static function rotas() {

            $dados = explode("/", $_POST['acao']);
    
            if(strcmp($dados[0], "pessoa") == 0) {
                PessoaController::index();
            }
         
        }
    }
?>