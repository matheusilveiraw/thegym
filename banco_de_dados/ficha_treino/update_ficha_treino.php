<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    if (isset($_POST['btn-cadastrar-ficha-treino'])) {
        $treinoFicha = new \App\Model\FichaTreino();

        $treinoFicha -> setNome($_POST['nome']);
        $treinoFicha -> setId($_POST['id']);
        $treinoFicha -> setTreino1($_POST['treino1']);
        $treinoFicha -> setTreino2($_POST['treino2']);
        $treinoFicha -> setTreino3($_POST['treino3']);
        $treinoFicha -> setTreino4($_POST['treino4']);
        $treinoFicha -> setTreino5($_POST['treino5']);

        var_dump($_POST);

        $treinoFichaDao = new \App\Model\FichaTreinoDao();

        $treinoFichaDao -> update($treinoFicha);
    }
?>