<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';

try {
    $usuario = new Usuarios();

    $nome = htmlspecialchars($_POST['nome_usuario']);
    $senha = $_POST['senha'];
    $email = htmlspecialchars($_POST['email']);
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $usuario->nome_usuario = $nome;
        $usuario->senha = $senha;
        $usuario->email = $email;

        $usuario->criar();

        header("Location: /agitos_slz/views/admin/admin_usuario.php");
    } else {
        header("Location: /agitos_slz/views/admin/admin_usuario.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
