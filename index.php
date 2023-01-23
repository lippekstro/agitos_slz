<?php
require_once "templates/cabecalho.php";
?>

 <!---- Imagem Superior acima do Menu-->

    

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
            <img src="img/B8.jpg" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/B2.webp" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="img/B10.jpg" alt="New york" style="width:100%;">
          </div>
        </div>

         <!--- Setas do Carrocel com efeitos -->
      
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
  </div>


  <!--- Primeira Coluna de Imagem -->
  <div class="coluna01">
    <img src="img/a1.jpg" alt="Show" width="30%" height="300">
    <img src="img/B8.jpg" alt="Trulli" width="45%" height="300">
    <img src="img/MA.jpg" alt="Trulli" width="10%" height="300">
    <img src="img/B8.jpg" alt="Trulli" width="45%" height="300">
    <img src="img/a2.jpg" alt="Trulli" width="0%" height="300">
    <img src="img/a14.jpg" alt="Trulli" width="30%" height="300">
    <img src="img/a2.jpg" alt="Trulli" width="10%" height="300">
  </div>
   
<!--- Segunda Coluna de Imagens -->

  </div>
  <div class="coluna02">
    <img src="img/a1.jpg" alt="Trulli" width="30%" height="300">
    <img src="img/B8.jpg" alt="Trulli" width="45%" height="300">
    <img src="img/MA.jpg" alt="Trulli" width="10%" height="300">
    <img src="img/B8.jpg" alt="Trulli" width="45%" height="300">
    <img src="img/a2.jpg" alt="Trulli" width="0%" height="300">
    <img src="img/a14.jpg" alt="Trulli" width="30%" height="300">
    <img src="img/a2.jpg" alt="Trulli" width="10%" height="300">
    

  </div>






<?php
require_once "templates/rodape.php";
?>