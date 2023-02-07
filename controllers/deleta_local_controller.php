<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/local.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $id_local = $_GET['id_local'];

    $local = new Local($id_local); 
    $local->deletar();

    header('Location: /agitos_slz/views/admin/admin_locais.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}