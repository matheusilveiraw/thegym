<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    $id = ($_GET['id']);

    $exercicioDao = new \App\Model\ExercicioDao();

    $exercicioDao -> delete($id);
?>