<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $id_usuario = $_GET['id_usuario'];

    $nome = new Usuarios($id_usuario); 
    $nome->deletar();

    header("Location: /agitos_slz/views/admin/admin_usuario.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}