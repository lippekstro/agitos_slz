<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/evento.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $id_evento = $_GET['id_evento'];

    $evento = new Evento($id_evento); 
    $evento->deletar();

    header('Location: /agitos_slz/views/admin/admin_eventos.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}