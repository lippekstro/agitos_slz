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
    <div class="painel">
      <button class="accordion">Praia</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'praia') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Museu</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'museu') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Praça</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'praca') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Parque</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'parque') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Centro Histórico</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'centro historico') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Igreja</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'igreja') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Artesanato</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'fazer' && $local['tipo'] == 'artesanato') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section>
    <button class="accordion">Onde Ficar?</button>
    <div class="painel">
      <button class="accordion">Hotel</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'ficar' && $local['tipo'] == 'hotel') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Hostel</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'ficar' && $local['tipo'] == 'hostel') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Pousada</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'ficar' && $local['tipo'] == 'pousada') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section>
    <button class="accordion">Onde Comer?</button>
    <div class="painel">
      <button class="accordion">Restaurante</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'comer' && $local['tipo'] == 'restaurante') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Bar</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'comer' && $local['tipo'] == 'bar') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <button class="accordion">Café</button>
      <div class="painel">
        <?php foreach ($lista as $local) : ?>
          <?php if ($local['categoria'] == 'comer' && $local['tipo'] == 'cafe') : ?>
            <div class="novo-local">
              <p>Nome: <?= $local['nome'] ?></p>
              <p>Endereco: <?= $local['endereco'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php else : ?>
  <section>
    Ainda não há locais cadastrados
  </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>