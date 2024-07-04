<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    $id = ($_GET['id']);

    $fichaTreinoDao = new \App\Model\FichaTreinoDao();

    $fichaTreinoDao -> delete($id);
?>