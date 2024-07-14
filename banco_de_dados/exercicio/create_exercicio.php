<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    if(htmlspecialchars($_POST['nome'], ENT_QUOTES, 'UTF-8')) {
        header('Location: ../../exercicio/exercicio_lista.php?passouCodigoHtmlCampoNome');
    } else { 
        if(isset($_POST['btn-cadastrar-exercicio'])) { 
            $exercicio = new \App\Model\Exercicio();
    
            $exercicio -> setNome($_POST['nome']);
            $exercicio -> setMusculo($_POST['musculo']);
    
            $exercicioDao = new \App\Model\ExercicioDao();
    
            $exercicioDao -> create($exercicio);
        }
    }
?>