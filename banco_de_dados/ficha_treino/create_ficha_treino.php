<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    var_dump($_POST);

    if(isset($_POST['btn-cadastrar-ficha-treino'])) { 
        $fichaTreino = new \App\Model\FichaTreino();

        $fichaTreino -> setNome($_POST['nome']);
        $fichaTreino -> setTreino1($_POST['treino1']);
        if(isset($_POST['treino2'])) { $fichaTreino -> setTreino2($_POST['treino2']); } 
        if(isset($_POST['treino3'])) { $fichaTreino -> setTreino3($_POST['treino3']); } 
        if(isset($_POST['treino4'])) { $fichaTreino -> setTreino4($_POST['treino4']); } 
        if(isset($_POST['treino5'])) { $fichaTreino -> setTreino5($_POST['treino5']); } 

        $treinoFichaDao = new \App\Model\FichaTreinoDao();

        $treinoFichaDao -> create($fichaTreino);
    }
?>