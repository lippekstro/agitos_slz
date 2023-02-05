<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/imagem.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $id_imagem = $_GET['id_imagem'];
    $imagem = new Imagem($id_imagem);
    $imagem->deletar();

    header('Location: /agitos_slz/views/admin/admin_imagens.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
