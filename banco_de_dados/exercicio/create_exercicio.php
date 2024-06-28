<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    var_dump($_POST);

    if(isset($_POST['btn-cadastrar-exercicio'])) { //verifica se o btn foi apertado
        //pegar os dados do formulario passado por submit
        $exercicio = new \App\Model\Exercicio();

        $exercicio -> setNome($_POST['nome']);
        $exercicio -> setMusculo($_POST['musculo']);

        $exercicioDao = new \App\Model\ExercicioDao();

        $exercicioDao -> create($exercicio);
    }
?>