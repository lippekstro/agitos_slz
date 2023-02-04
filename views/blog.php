<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
?>

<section>
  <div class="container">
    <img src="/agitos_slz/img/leoes.jpg" alt="Palacio dos Leões" width="100%">

    <div class="content">
      <h1><b>São Luís</b></h1>
      <h4>Roteiro de 15 dias na capital Maranhense.</h4>
      <p style="text-align: center;">Juan Frazão | Fevereiro 02, 2023</p>
    </div>
  </div>
</section>

<section class="container-cards">
  <div class="card">
    <a href="/agitos_slz/views/blog_exibe.php?id_postagem=#">
      <div class="card-head">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
      </div>
      <div class="card-img">
        <img src="https://source.unsplash.com/random/1920x1080/?museum" alt="" width="100%" height="auto">
      </div>
      <div class="card-container">
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      </div>
    </a>
  </div>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>