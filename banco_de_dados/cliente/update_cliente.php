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

        $cliente->setId($_POST['id']);
        $cliente->setNome($_POST['nome']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setCpf($_POST['cpf']);
        $cliente->setFichaTreino($_POST['ficha_treino']);

        $clienteDao = new \App\Model\ClienteDao();

        $clienteDao->update($cliente);
    }
}
?>