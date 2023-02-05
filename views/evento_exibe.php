<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/cabecalho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/models/evento.php';

try {
    $id_evento = $_GET['id_evento'];
    $evento = new Evento($id_evento);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<section class="container-cards">
    <div class="card">
        <div class="card-head">
            <h2><?= $evento->nome_evento ?></h2>
            <div class="container-autor-data">
                <h5><?= $evento->data_evento ?> às <?= $evento->hora ?></h5>
                <h5><?= $evento->local_evento ?></h5>
            </div>
        </div>
        <div class="card-img">
            <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($evento->imagem_evento); ?>" alt="" width="100%" height="auto">
        </div>
        <div class="card-container">
            <p><?= $evento->descricao_evento ?></p>
        </div>
    </div>
</section>


<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/agitos_slz/templates/rodape.php';
?>