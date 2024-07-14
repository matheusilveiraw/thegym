<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    $nome = $_POST['nome'];
    $link = $_POST['link'];

    if(htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') || htmlspecialchars($link, ENT_QUOTES, 'UTF-8')) {
        header('Location: ../../musculos/musculos_lista.php?passouCodigoHtml');
    } else { 
        if(isset($_POST['btn-cadastrar-musculos'])) { 
            $musculo = new \App\Model\Musculo();
    
            $musculo -> setNome($nome);
            $musculo -> setLink($link);
            $musculo -> setData(date('Y-m-d H:i:s'));
    
            $musculoDao = new \App\Model\MusculoDao();
    
            $musculoDao -> create($musculo);
        }
    }
?>