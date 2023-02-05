<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/postagem.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';
/* session_start(); */

try {
    $titulo = htmlspecialchars($_POST['titulo']);
    $conteudo = htmlspecialchars($_POST['conteudo']);
    $id_postagem = $_POST['id_post'];

    $postagem = new Postagem($id_postagem);
    $postagem->titulo = $titulo;
    $postagem->conteudo = $conteudo;

    $postagem->editar_postagem();

    header('Location: /agitos_slz/views/admin/admin_postagens_blog.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
