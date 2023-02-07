<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/postagem.php';

try {
  $lista = Postagem::listar();
} catch (Exception $e) {
  echo $e->getMessage();
}
?>

<section>
  <div class="container">
    <a href="/agitos_slz/views/blog_exibe.php?id_post=<?= $lista[0]['id_post'] ?>">
      <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista[0]['imagem_post']); ?>" alt="" width="100%">

      <div class="content">
        <h1><b><?= $lista[0]['titulo'] ?></b></h1>
        <p style="text-align: center;"><?= $lista[0]['nome_autor'] ?> | <?= $lista[0]['data_publicacao'] ?></p>
      </div>
    </a>
  </div>
</section>

<section class="container-cards">
  <?php for ($i=1; $i < count($lista); $i++): ?>
    <div class="card">
      <a href="/agitos_slz/views/blog_exibe.php?id_post=<?= $lista[$i]['id_post'] ?>">
        <div class="card-head">
          <h2><?= $lista[$i]['titulo'] ?></h2>
          <div class="container-autor-data">
            <h5><?= $lista[$i]['nome_autor'] ?></h5>
            <h5><?= $lista[$i]['data_publicacao'] ?></h5>
          </div>
        </div>
        <div class="card-img">
          <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista[$i]['imagem_post']); ?>" alt="">
        </div>
        <div class="card-container">
          <p><?= $lista[$i]['conteudo'] ?></p>
        </div>
      </a>
    </div>
  <?php endfor; ?>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>