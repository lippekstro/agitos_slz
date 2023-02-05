<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $nome = htmlspecialchars($_POST['nome_usuario']);
    $email = htmlspecialchars($_POST["email"]);
    $id_usuario = $_POST["id_usuario"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $usuario = new Usuarios($id_usuario);
        $usuario->nome_usuario = $nome;
        $usuario->email = $email;

        $usuario->editar_usuario();

        header("Location: /agitos_slz/views/admin/admin_usuario.php");
    } else {
        header("Location: /agitos_slz/views/admin/admin_usuario.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}