<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    $id = ($_GET['id']);

    $clienteDao = new \App\Model\ClienteDao();

    $clienteDao -> delete($id);
?>