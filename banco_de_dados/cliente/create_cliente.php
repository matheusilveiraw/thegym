<?php
require_once '../../vendor/autoload.php';
require_once '../connect.php';
require_once '../../includes/limparHtml.php';
require_once '../../includes/sqlInjection.php';

$nome = limparHtml($_POST['nome']);
$cpf = limparHtml($_POST['cpf']);
$idade = limparHtml($_POST['idade']);

if (isset($_POST['btn-cadastrar-cliente'])) {
    if (detectaSqlInjection($nome) || detectaSqlInjection($link)) {
        header('Location: ../../cliente/cliente_lista.php?sqlError');
    } else {
        $cliente = new \App\Model\Cliente();

        $cliente->setNome($nome);
        $cliente->setIdade($idade);
        $cliente->setCpf($cpf);
        $cliente->setFichaTreino($_POST['ficha_treino']);

        $clienteDao = new \App\Model\ClienteDao();

        $clienteDao->create($cliente);
    }
}
