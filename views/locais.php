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
    <button class="accordion">O Que Fazer?</button>
    <?php foreach ($lista as $local) : ?>
      <?php if ($local['categoria'] == 'fazer') : ?>
        <div class="painel">
          <p>Nome: <?= $local['nome'] ?></p>
          <p>Endereco: <?= $local['endereco'] ?></p>
          <p>Tipo: <?= $local['tipo'] ?></p>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>

    <button class="accordion">Onde Ficar?</button>
    <?php foreach ($lista as $local) : ?>
      <?php if ($local['categoria'] == 'ficar') : ?>
        <div class="painel">
          <p>Nome: <?= $local['nome'] ?></p>
          <p>Endereco: <?= $local['endereco'] ?></p>
          <p>Tipo: <?= $local['tipo'] ?></p>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>

    <button class="accordion">Onde Comer?</button>
    <?php foreach ($lista as $local) : ?>
      <?php if ($local['categoria'] == 'comer') : ?>
        <div class="painel">
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