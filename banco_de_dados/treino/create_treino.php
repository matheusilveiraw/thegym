<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    if(isset($_POST['btn-cadastrar-treino'])) { 
        $treino = new \App\Model\Treino();

        $treino -> setNome($_POST['nome']);
        $treino -> setExercicio1($_POST['exercicio1']);
        $treino -> setExercicio2($_POST['exercicio2']);
        $treino -> setExercicio3($_POST['exercicio3']);
        $treino -> setExercicio4($_POST['exercicio4']);
        $treino -> setExercicio5($_POST['exercicio5']);
        $treino -> setExercicio6($_POST['exercicio6']);

        $treinoDao = new \App\Model\TreinoDao();

        $treinoDao -> create($treino);
    }
?>