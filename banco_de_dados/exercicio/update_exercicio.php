<?php
require_once '../../vendor/autoload.php';
require_once '../connect.php';
require_once '../../includes/limparHtml.php';
require_once '../../includes/sqlInjection.php';


$nome = limparHtml($_POST['nome']);

if (isset($_POST['btn-cadastrar-exercicio'])) {
    $nome = limparHtml($_POST['nome']);

    if (detectaSqlInjection($nome) || detectaSqlInjection($link)) {
        header('Location: ../../exercicio/exercicio_lista.php?sqlError');
    } else {
        $exercicio = new \App\Model\Exercicio();

        $exercicio->setId($_POST['id']);
        $exercicio->setNome($nome);
        
        $exercicio->setMusculo($_POST['musculo']);
    
        $exercicioDao = new \App\Model\ExercicioDao();
    
        $exercicioDao->update($exercicio);
    }
}