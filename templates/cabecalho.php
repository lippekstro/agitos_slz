<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/bd/conexao.php';
session_start();
date_default_timezone_set("America/Sao_Paulo");

$date = new IntlDateFormatter(
  'pt_BR',
  IntlDateFormatter::FULL,
  IntlDateFormatter::FULL,
  'America/Sao_Paulo',
  IntlDateFormatter::GREGORIAN,
  "dd 'de' MMMM 'de' yyyy"
);

$hora = new IntlDateFormatter(
  'pt_BR',
  IntlDateFormatter::FULL,
  IntlDateFormatter::FULL,
  'America/Sao_Paulo',
  IntlDateFormatter::GREGORIAN,
  "HH':'mm'h"
);

$datahora = new IntlDateFormatter(
  'pt_BR',
  IntlDateFormatter::FULL,
  IntlDateFormatter::FULL,
  'America/Sao_Paulo',
  IntlDateFormatter::GREGORIAN,
  "dd 'de' MMMM 'de' yyyy 'às' HH':'mm':'ss"
);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Agitos SLZ</title>
  <link rel="shortcut icon" href="/agitos_slz/img/logo01.jpg" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="/agitos_slz/css/style.css">
  <link rel="stylesheet" href="/agitos_slz/css/rodape.css">
  <link rel="stylesheet" href="/agitos_slz/css/blog.css">
  <link rel="stylesheet" href="/agitos_slz/css/cards.css">
  <link rel="stylesheet" href="/agitos_slz/css/sobre.css">
  <link rel="stylesheet" href="/agitos_slz/css/eventos.css">
  <link rel="stylesheet" href="/agitos_slz/css/experiencias.css">
  <link rel="stylesheet" href="/agitos_slz/css/locais.css">
  <link rel="stylesheet" href="/agitos_slz/css/tabelas.css">
</head>

<body>
  <header>
    <!---- Imagem Superior acima do Menu-->
    <div class="img">
      <img src="/agitos_slz/img/R.jpg" alt="" width="100%" height="300rem">
    </div>
    <!-- Menu-->
    <div class="menu">
      <nav>
        <ul>
          <li><a href="/agitos_slz/index.php"> Inicio </a></li>
          <li><a href="/agitos_slz/views/blog.php"> Blog</a></li>
          <li><a href="/agitos_slz/views/locais.php">Locais</a></li>
          <li><a href="/agitos_slz/views/experiencias.php"> Experiencias</a></li>
          <li><a href="/agitos_slz/views/eventos.php">Eventos </a></li>
          <li><a href="/agitos_slz/views/sobre.php">Sobre</a></li>
          <li>
            <?php if (!isset($_SESSION['usuario']['nome_usuario'])) : ?>
              <a href="/agitos_slz/views/admin/login.php">
                <span class="material-symbols-outlined">login</span>
              </a>
            <?php else : ?>
              <div class="dropdown">
                <div class="form-item">
                  <span><?= $_SESSION['usuario']['nome_usuario'] ?></span>
                  <span class="material-symbols-outlined">account_circle</span>
                </div>

                <div class="dropdown-content">
                  <a href="/agitos_slz/views/admin/admin_imagens.php">Gerenciamento de Imagens</a>
                  <a href="/agitos_slz/views/admin/admin_postagens_blog.php">Gerenciamento do Blog</a>
                  <a href="/agitos_slz/views/admin/admin_locais.php">Gerenciamento do Locais</a>
                  <a href="/agitos_slz/views/admin/admin_eventos.php">Gerenciamento de Eventos</a>
                  <a href="/agitos_slz/views/admin/admin_usuario.php">Gerenciamento de Usuários</a>
                  <a href="/agitos_slz/controllers/logout_controller.php">Logout</a>
                </div>
              </div>
            <?php endif; ?>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main>