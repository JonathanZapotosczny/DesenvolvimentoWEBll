<?php

    include_once '../global.php';

    class RouteController {

        public static function index() {
            echo "<script>window.location='views/viewMain.php'</script>";
        }

        public static function rotas() {

            $dados = explode("/", $_POST['acao']);
    
            if(strcmp($dados[0], "cursos") == 0) {
                PessoaController::index();
            }
            else if(strcmp($dados[0], "alunos") == 0) {
                // AlunoController::index();
            }
            else if(strcmp($dados[0], "turmas") == 0) {
                // TurmaController::index();
            }
        }
    }
?>