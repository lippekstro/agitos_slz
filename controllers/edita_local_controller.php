<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/local.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $nome = htmlspecialchars($_POST['nome']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    $id_local = $_POST['id_local'];

    $local = new Local($id_local);
    $local->nome = $nome;
    $local->endereco = $endereco;
    $local->categoria = $categoria;
    $local->tipo = $tipo;

    $local->editar();

    header('Location: /agitos_slz/views/admin/admin_locais.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
