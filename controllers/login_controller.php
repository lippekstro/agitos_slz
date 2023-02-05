<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';
session_start();
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

try {
    $query = "select * from usuarios where email = :email LIMIT 1";
    $conexao = Conexao::conectar();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $registro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        if (password_verify($senha, $registro['senha'])) {
            $_SESSION['usuario']['nome_usuario'] = $registro['nome_usuario'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];

            header("Location: /agitos_slz/index.php");
        } else {
            $erroMsg[] = "Email ou Senha errado";
            header("Location: /agitos_slz/views/admin/login.php");
        }
    } else {
        $erroMsg[] = "Email ou Senha errado";
        header("Location: /agitos_slz/views/admin/login.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}