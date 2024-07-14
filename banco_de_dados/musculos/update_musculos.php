<?php
require_once '../../vendor/autoload.php';
require_once '../connect.php';
require_once '../../includes/limparHtml.php';

$nome = limparHtml($_POST['nome']);
$link = limparHtml($_POST['link']);

if (isset($_POST['btn-cadastrar-musculos'])) {
    $musculo = new \App\Model\Musculo();

    $musculo->setId($_POST['id']);
    $musculo->setNome($nome );
    $musculo->setLink($link);

    $musculoDao = new \App\Model\MusculoDao();

    $musculoDao->update($musculo);
}
