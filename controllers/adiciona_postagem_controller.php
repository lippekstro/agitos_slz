<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/postagem.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';
session_start();


try {
    $postagem = new Postagem();

    $titulo = htmlspecialchars($_POST['titulo']);
    $conteudo = htmlspecialchars($_POST['conteudo']);
    $id_autor = $_SESSION['usuario']['id_usuario'];
    if (!empty($_FILES['imagem_post']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem_post']['tmp_name']);
    }

    $postagem->titulo = $titulo;
    $postagem->conteudo = $conteudo;
    $postagem->imagem_post = $imagem;
    $postagem->id_usuario  = $id_autor;

    $postagem->criar();

    header('Location: /agitos_slz/views/admin/admin_postagens_blog.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
