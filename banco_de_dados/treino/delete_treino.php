<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    $id = ($_GET['id']);

    $treinoDao = new \App\Model\TreinoDao();

    $treinoDao -> delete($id);
?>