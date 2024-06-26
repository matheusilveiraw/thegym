<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    var_dump($_POST);

    if(isset($_POST['btn-cadastrar-musculos'])) { //verifica se o btn foi apertado
        //pegar os dados do formulario passado por submit
        $musculo = new \App\Model\Musculo();

        $musculo -> setNome($_POST['nome']);
        $musculo -> setLink($_POST['link']);
        $musculo -> setData(date('Y-m-d H:i:s'));

        $musculoDao = new \App\Model\MusculoDao();

        $musculoDao -> create($musculo);
    }

?>