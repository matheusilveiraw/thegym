<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    $id = ($_GET['id']);

    $musculoDao = new \App\Model\MusculoDao();

    $musculoDao -> delete($id);
?>