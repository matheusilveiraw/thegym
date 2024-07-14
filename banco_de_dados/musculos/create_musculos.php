<?php
require_once '../../vendor/autoload.php';
require_once '../connect.php';

function limparHtml($data) {
    return htmlspecialchars(strip_tags($data), ENT_QUOTES, 'UTF-8');
}

$nome = limparHtml($_POST['nome']);
$link = limparHtml($_POST['link']);

if (isset($_POST['btn-cadastrar-musculos'])) {
    $musculo = new \App\Model\Musculo();

    $musculo->setNome($nome);
    $musculo->setLink($link);
    $musculo->setData(date('Y-m-d H:i:s'));

    $musculoDao = new \App\Model\MusculoDao();

    $musculoDao->create($musculo);
}
