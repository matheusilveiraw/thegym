<?php

    require_once '../connect.php';

    if(isset([$_POST['btn-cadastrar-musculos']]))  { //verifica se o btn foi apertado
        //pegar os dados do formulario passado por submit
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $img = mysqli_real_escape_string($connect, $_POST['img']);
        $date = mysqli_real_escape_string($connect, date());
    }

?>