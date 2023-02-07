<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/local.php';

try {
  $lista = Local::listar();
} catch (Exception $e) {
  echo $e->getMessage();
}

?>

<?php if (count($lista) > 0) : ?>
  <section>
    <?php foreach ($lista as $local) : ?>

      <button class="accordion">O que fazer?</button>
      <?php if ($local['categoria'] == 'fazer') : ?>
        <div class="panel">
          <p>Nome: <?= $local['nome'] ?></p>
          <p>Endereco: <?= $local['endereco'] ?></p>
          <p>Tipo: <?= $local['tipo'] ?></p>
        </div>
      <?php endif; ?>

      <button class="accordion">Onde Ficar?</button>
      <?php if ($local['categoria'] == 'ficar') : ?>
        <div class="panel">
          <p>Nome: <?= $local['nome'] ?></p>
          <p>Endereco: <?= $local['endereco'] ?></p>
          <p>Tipo: <?= $local['tipo'] ?></p>
        </div>
      <?php endif; ?>

      <button class="accordion">Onde Comer?</button>
      <?php if ($local['categoria'] == 'comer') : ?>
        <div class="panel">
          <p>Nome: <?= $local['nome'] ?></p>
          <p>Endereco: <?= $local['endereco'] ?></p>
          <p>Tipo: <?= $local['tipo'] ?></p>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </section>
<?php else : ?>
  <section>
    Ainda não há locais cadastrados
  </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>