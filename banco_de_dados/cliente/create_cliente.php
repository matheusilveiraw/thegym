<?php
    require_once '../../vendor/autoload.php';
    require_once '../connect.php';

    var_dump($_POST);

    if(isset($_POST['btn-cadastrar-cliente'])) { 
        $cliente = new \App\Model\Cliente();

        $cliente -> setNome($_POST['nome']);
        $cliente -> setIdade($_POST['idade']);
        $cliente -> setCpf($_POST['cpf']);
        $cliente -> setFichaTreino($_POST['ficha_treino']);

        $clienteDao = new \App\Model\ClienteDao();

        $clienteDao -> create($cliente);
    }
?>