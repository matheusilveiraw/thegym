<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    if (isset($_POST['btn-cadastrar-exercicio'])) {
        $exercicio = new \App\Model\Exercicio();

        $exercicio->setId($_POST['id']);
        $exercicio->setNome($_POST['nome']);
        $exercicio->setMusculo($_POST['musculo']);

        $exercicioDao = new \App\Model\ExercicioDao();

        $exercicioDao->update($exercicio);
    }
?>
