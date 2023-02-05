<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/postagem.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $id_post = $_GET['id_post'];

    $postagem = new Postagem($id_post); 
    $postagem->deletar();

    header('Location: /agitos_slz/views/admin/admin_postagens_blog.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}