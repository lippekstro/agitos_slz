<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>
<section class="container-all-local"> <!--div pai-->
    <div class="content-box-all-local"> <!--div filho-->
      <article class="content-div-all">
        <div class="box-content-div">
          <div class="content-div-h1-local">
            <h1>O que fazer</h1>
          </div>
          <div class="content-div-h1-img">
            <img src="../img/o que fazer.jpg">
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">O QUE FAZER</button>
          <div class="dropdown-content">
            <a href="conteudolocais.php">Pontos Turisticos</a> 
            <a href="#">Eventos</a>
            <a href="#">Esportes</a>
          </div>
        </div>


      </article>

      <article class="content-div-all">
        <div class="box-content-div">
          <div class="content-div-h1-local">
            <h1>Onde ficar</h1>
          </div>
          <div class="content-div-h1-img">
            <img src="../img/blue-tree-towers-sao.jpg">
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">ONDE FICAR</button>
          <div class="dropdown-content">
            <a href="#">Hotel</a>
            <a href="#">Pousadas</a>
            <a href="#">Hostel</a>
            <a href="#">Albergues</a>
          </div>
        </div>

      </article>

      <article class="content-div-all">
        <div class="box-content-div">
          <div class="content-div-h1-local">
            <h1>Onde comer</h1>
          </div>
          <div class="content-div-h1-img">
            <img src="../img/onde comer.jpg">
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">ONDE COMER</button>
          <div class="dropdown-content">
            <a href="#">Restaurante</a>
            <a href="#">Bares</a>
            <a href="#">Cafés</a>
            <a href="#">Padarias e Lanchonetes</a>
            <a href="#">Sorveterias</a>
          </div>
        </div>
      </article>
      
    </div><!--final filho-->
  </section>  <!--Termino div pai-->


  <?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>