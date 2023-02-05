<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/evento.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';


try {
    $evento = new Evento();

    $nome_evento = htmlspecialchars($_POST['nome_evento']);
    $local = htmlspecialchars($_POST['local_evento']);
    $hora = $_POST['hora'];
    $data_evento = $_POST['data_evento'];
    $descricao_evento = htmlspecialchars($_POST['descricao_evento']);
    if (!empty($_FILES['imagem_evento']['tmp_name'])) {
        $imagem = file_get_contents($_FILES['imagem_evento']['tmp_name']);
    }

    $evento->nome_evento = $nome_evento;
    $evento->local_evento = $local;
    $evento->hora = $hora;
    $evento->data_evento  = $data_evento;
    $evento->descricao_evento = $descricao_evento;
    $evento->imagem_evento = $imagem;

    $evento->criar();

    header('Location: /agitos_slz/views/admin/admin_eventos.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
