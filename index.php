<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/imagem.php';

try {
  $lista = Imagem::listar();
} catch (Exception $e) {
  echo $e->getMessage();
}

?>

<section>
  <div class="container-carrossel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicadores da imagem com bolinhas  -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!---Imagens do Carrosel-->
      <div class="carousel-inner">
        <?php for ($i = 0; $i < 3; $i++) : ?>
          <?php if ($i == 0) : ?>
            <div class="item active">
          <?php else : ?>
            <div class="item">
          <?php endif; ?>
              <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($lista[$i]['imagem_inicio']); ?>" alt="">
              </div>
        <?php endfor; ?> 
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
    </div>
</section>

<section>
  <div class="coluna01">
    <?php foreach ($lista as $img) : ?>
      <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($img['imagem_inicio']); ?>" alt="" height="auto">
    <?php endforeach; ?>
  </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>