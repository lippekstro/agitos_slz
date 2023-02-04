<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<section>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicadores da imagem com bolinhas  -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!---Imagens do Carrosel-->
      <div class="carousel-inner">
        <div class="item active">
          <img src="https://source.unsplash.com/random/1920x1080/?museum" alt="" width="100%" height="auto">
        </div>

        <div class="item">
          <img src="https://source.unsplash.com/random/1920x1080/?beach" alt="" width="100%" height="auto">
        </div>

        <div class="item">
          <img src="https://source.unsplash.com/random/1920x1080/?bar" alt="" width="100%" height="auto">
        </div>
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
    <img src="img/a1.jpg" alt="" width="25%" height="auto">
    <img src="img/B8.jpg" alt="" width="25%" height="auto">
    <img src="img/MA.jpg" alt="" width="25%" height="auto">
    <img src="img/B8.jpg" alt="" width="25%" height="auto">
    <img src="img/a14.jpg" alt="" width="25%" height="auto">
    <img src="img/a2.jpg" alt="" width="25%" height="auto">
  </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>