<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/imagem.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    if (!empty($_FILES['imagem_inicio']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem_inicio']['tmp_name']);
    }

    $img = new Imagem();
    $img->imagem_inicio = $imagem;
    $img->criar();

    header('Location: /agitos_slz/views/admin/admin_imagens.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
