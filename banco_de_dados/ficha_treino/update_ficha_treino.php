<?php
require_once '../../vendor/autoload.php';
require_once '../connect.php';
require_once '../../includes/limparHtml.php';
require_once '../../includes/sqlInjection.php';

    if (isset($_POST['btn-cadastrar-ficha-treino'])) {
        $nome = limparHtml($_POST['nome']);
        if (detectaSqlInjection($nome)) {
            header('Location: ../../ficha_treino/ficha_treino_lista.php?sqlError');
        } else {
            $fichaTreino = new \App\Model\FichaTreino();
            $fichaTreino -> setNome($_POST['nome']);
            $fichaTreino -> setId($_POST['id']);            
            $fichaTreino -> setTreino1($_POST['treino1']);
            if(isset($_POST['treino2'])) { $fichaTreino -> setTreino2($_POST['treino2']); } 
            if(isset($_POST['treino3'])) { $fichaTreino -> setTreino3($_POST['treino3']); } 
            if(isset($_POST['treino4'])) { $fichaTreino -> setTreino4($_POST['treino4']); } 
            if(isset($_POST['treino5'])) { $fichaTreino -> setTreino5($_POST['treino5']); } 

            $fichaTreinoDao = new \App\Model\FichaTreinoDao();

            $fichaTreinoDao -> update($fichaTreino);
        }
    }
?>
