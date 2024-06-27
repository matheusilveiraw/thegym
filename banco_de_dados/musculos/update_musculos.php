<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    var_dump($_POST);

    if(isset($_POST['btn-cadastrar-musculos'])) {
        $musculo = new \App\Model\Musculo();

        $musculo -> setId($_POST['id']);
        $musculo -> setNome($_POST['nome']);
        $musculo -> setLink($_POST['link']);

        $musculoDao = new \App\Model\MusculoDao();

        $musculoDao -> update($musculo);
    }

?>