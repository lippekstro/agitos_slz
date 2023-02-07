<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/local.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';


try {
    $local = new Local();

    $nome_local = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    
    $local->nome = $nome_local;
    $local->endereco = $endereco;
    $local->categoria = $categoria;
    $local->tipo  = $tipo;
    
    $local->criar();

    header('Location: /agitos_slz/views/admin/admin_locais.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
