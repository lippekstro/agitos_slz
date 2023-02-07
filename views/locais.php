<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
/* require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/locais.php';

try {
  $lista = Local::listar();
} catch (Exception $e) {
  echo $e->getMessage();
} */

/* comentei acima os requires necessarios do back end e a geracao da lista...
abaixo eu gero a lista vazia para ele passar na verificacao enquanto ainda estamos no front end */

$lista = [];
?>

<?php if (count($lista) > 0) : ?>
  <section>
    <!-- o codigo da equipe aqui dentro -->
  </section>
<?php else : ?>
  <section>
    Ainda não há locais cadastrados
  </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>